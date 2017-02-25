<?php

function ip() {
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
      $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

function titleCase($string)
{
  $word_splitters = array(' ', '-', "O'", "L'", "D'", 'St.', 'Mc');
  $lowercase_exceptions = array('the', 'van', 'den', 'von', 'und', 'der', 'de', 'da', 'of', 'and', "l'", "d'");
  $uppercase_exceptions = array('III', 'IV', 'VI', 'VII', 'VIII', 'IX');

  $string = strtolower($string);
  foreach ($word_splitters as $delimiter)
  {
    $words = explode($delimiter, $string);
    $newwords = array();
    foreach ($words as $word)
    {
      if (in_array(strtoupper($word), $uppercase_exceptions))
        $word = strtoupper($word);
      else
      if (!in_array($word, $lowercase_exceptions))
        $word = ucfirst($word);

      $newwords[] = $word;
    }

    if (in_array(strtolower($delimiter), $lowercase_exceptions))
      $delimiter = strtolower($delimiter);

    $string = join($delimiter, $newwords);
  }
  return $string;
}

date_default_timezone_set('America/New_York');
use Carbon\Carbon;
// header('Content-Type: application/json');

if ( !defined('ABSPATH') ) {
    require_once( '../../../../wp-load.php' );
}

$args = [
    'fname'        => FILTER_SANITIZE_STRING,
    'lname'    => FILTER_SANITIZE_STRING,
    'email'       => FILTER_SANITIZE_STRING,
];

$input = filter_input_array(INPUT_GET, $args, true);
extract($input);

$errors = $res = [];

if (empty($fname)) {
  $errors['fname'] = 'You must enter a first name.';
}
if (empty($lname)) {
  $errors['lname'] = 'You must enter a last name.';
}
if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  $errors['email'] = 'You must enter a valid email address.';
}

$fname = titleCase($fname);
$lname = titleCase($lname);

if (!empty($errors)) {
  $res['status'] = 'error';
  $res['errors'] = $errors;
  $res['error_type'] = 'validation';
  echo json_encode($res); die();
}


/**** We've passed validatio.  Let's add to Mailchimp. ****/

$mc = new MailchimpIntegration();
$mc_res = $mc->subscribe_or_update($email,$fname,$lname);
$subscriber_id = empty($mc_res['subscriber_id']) ? 'FAILED TO SUBSCRIBE TO MAILCHIMP' : $mc_res['subscriber_id'];
$mc_success = empty($mc_res['subscriber_id']) ? false : true;


/*** We've passed validation.  Now let's do gravity forms **/

$now = new Carbon('now',new DateTimeZone('America/New_York'));
$entry =[];
$entry['form_id']=13;
$entry['created_by']=1;
$entry['date_created']=$now->format('Y-m-d H:i:s');
$entry['ip']=ip();
if (!empty($_SERVER["HTTP_REFERER"])) {
  $entry['source_url']= $_SERVER["HTTP_HOST"] . $_SERVER["HTTP_REFERER"];
}
$entry['status']='Active';
$entry['1']=$fname;
$entry['2']=$lname;
$entry['3']=$email;
$entry['4']=$subscriber_id;

$req = GFAPI::add_entry( $entry );
if (is_wp_error($req)) {
  $res['status'] = 'error';
  $res['errors'][] = 'We were unable to record your submission.  Please try again soon. (' . $req->get_error_message($req->get_error_code()) . ')';
  echo json_encode($res); die();
} else {
  $entry = GFAPI::get_entry( $req );
  $form = GFAPI::get_form( 13 );
  GFAPI::send_notifications($form,$entry);
  $res['status'] = 'success';
  if ($mc_success==false) {
    $res['status'] = 'error';
    $res['errors'][] = 'We were unable to subscribe your email address.  Please try again later.';
  }
  $res['form_id'] = 13;
  $res['entry_id'] = $req;
  $res['entry'] = $entry;
  $res['mailchimp_subscriber_id'] = $subscriber_id;
  echo json_encode($res); die();
}