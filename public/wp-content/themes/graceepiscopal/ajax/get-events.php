<?php

function pad($num) {
  return str_pad($num, 2, "0", STR_PAD_LEFT);
}

date_default_timezone_set('America/New_York');
use Carbon\Carbon;
// header('Content-Type: application/json');

if ( !defined('ABSPATH') ) {
    require_once( '../../../../wp-load.php' );
}

$args = [
    'type'         => FILTER_SANITIZE_STRING,
    'start_day'    => FILTER_VALIDATE_INT,
    'start_month'  => FILTER_VALIDATE_INT,
    'start_year'   => FILTER_VALIDATE_INT,
    'end_day'      => FILTER_VALIDATE_INT,
    'end_month'    => FILTER_VALIDATE_INT,
    'end_year'     => FILTER_VALIDATE_INT,
    'limit'        => FILTER_VALIDATE_INT,
];

$input = filter_input_array(INPUT_GET, $args, true);

$now = new Carbon('now',new DateTimeZone('America/New_York'));

$input['type'] = $input['type'] == 'range' || $input['type'] == 'single' || $input['type'] == 'counts' || $input['type'] == 'month' ? $input['type'] : 'upcoming';

if (empty($input['start_day']) || $input['start_day']<0 || $input['start_day']>31) {
  $input['start_day'] = $now->format('d');
}

if (empty($input['start_month']) || $input['start_month']<0 || $input['start_month']>12) {
  $input['start_month'] = $now->format('m');
}

if (empty($input['start_year']) || $input['start_year']<1900 || $input['start_year']>2050) {
  $input['start_year'] = $now->format('Y');
}

if (empty($input['end_day']) || $input['end_day']<0 || $input['end_day']>31) {
  $input['end_day'] = $now->format('d');
}

if (empty($input['end_month']) || $input['end_month']<0 || $input['end_month']>12) {
  $input['end_month'] = $now->format('m');
}

if (empty($input['end_year']) || $input['end_year']<1900 || $input['end_year']>2050) {
  $input['end_year'] = $now->format('Y');
}

$input['limit'] = empty($input['limit']) ? 100 : $input['limit'];


$start_day = $input['start_year'] . '-' . pad($input['start_month']) . '-' . pad($input['start_day']);
$end_day = $input['end_year'] . '-' . pad($input['end_month']) . '-' . pad($input['end_day']);



switch ($input['type']) {
  case 'range' :

    $start = $input['start_year'] . '-' . $input['start_month'] . '-' . $input['start_day'] . ' 00:00:00';
    $end = $input['end_year'] . '-' . $input['end_month'] . '-' . $input['end_day'] . ' 23:59:59';

    break;

  case 'month' :

    $start = $input['start_year'] . '-' . pad($input['start_month']) . '-' . '01' . ' 00:00:00';
    $end = $input['start_year'] . '-' . pad($input['start_month']) . '-' . pad(date('t', strtotime($input['start_year']))) . ' 23:59:59';
    break;

  case 'single' :

    $start = $input['start_year'] . '-' . pad($input['start_month']) . '-' . pad($input['start_day']) . ' 00:00:00';
    $end = $input['start_year'] . '-' . pad($input['start_month']) . '-' . pad($input['start_day']) . ' 23:59:59';

    break;

  case 'counts' :

    $start = $input['start_year'] . '-' .  pad($input['start_month']) . '-' . '01' . ' 00:00:00';
    $days_in_month =  pad(date('t', strtotime($start)));
    $end = $input['start_year'] . '-' .  pad($input['start_month']) . '-' .$days_in_month . ' 23:59:59';

    break;

  default : //upcoming

    $start = $input['start_year'] . '-' . $input['start_month'] . '-' . $input['start_day'] . ' 00:00:00';
    $end = '2999-12-31 23:59:59';

}

$events = eventsSearch()->search($start, $end);

if ($input['type'] == 'counts') {

  $counts = [];
  foreach ($events as $event) {

    $start = get_field('event_start_time_use',$event->ID);
    $start = new Carbon($start,new DateTimeZone('America/New_York'));

    $month = $start->format('m');
    $day = $start->format('d');
    $year = $start->format('Y');
    if ($input['start_month'] != $month) {
      continue;
    }
    $date = $year . '-'  . $month . '-' . $day;
    $counts[$date] = isset($counts[$date]) ? $counts[$date] + 1 : 1;

  }

  echo json_encode($counts);
  die();

}

$events = array_slice($events, 0, $input['limit']);
$event_output = '';
foreach ($events as $event) {
  $start = get_field('event_start_time_use',$event->ID);
  $start = new Carbon($start,new DateTimeZone('America/New_York'));
  $data = [
    'title' => get_field('event_title_use',$event->ID),
    'link' => get_permalink($event->ID),
    'month' => $start->format('F'),
    'day' => $start->format('j'),
    'time' => $start->format('g:i A'),
    'all_day' => (new ExtendedTimberPost($event->ID))->all_day(),

  ];
  $event_output .= Timber::compile('partials/event.twig', $data);
}

echo $event_output;
