<?php


$data = Timber::get_context();


/****
** Homepage Slider
*****/
$args = array(
    'post_type' => 'slide',
    'order_by' => 'menu_order',
    'order' => 'ASC',
);
$data['slides'] = Timber::get_posts($args, 'ExtendedTimberPost');


/****
** Recent News
*****/
$args = array(
    'post_type' => 'news',
    'post_per_page' => 3,
);
$data['news'] = Timber::get_posts($args, 'ExtendedTimberPost');


/**********************
*
* Set up Calendar
*
***********************/
$calendar = [];

// Months Array
$current_month = date('m');
$calendar['selected_month'] = $current_month;
$calendar['months'] = array(
    '01' => 'January',
    '02' => 'February',
    '03' => 'March',
    '04' => 'April',
    '05' => 'May',
    '06' => 'June',
    '07' => 'July',
    '08' => 'August',
    '09' => 'September',
    '10' => 'October',
    '11' => 'November',
    '12' => 'December'
);


// Year Array
$oldest_year = 2010;
$current_year = date('Y');
$calendar['years'] = range($oldest_year, $current_year);
$calendar['selected_year'] = $current_year;


$calendar['calendar'] = array();
$loop = new WP_Query(
    array(
        'posts_per_page' => -1,
        'ignore_sticky_posts' => TRUE,
        'post_type' => 'ai1ec_event',
        'order' => 'ASC',
        'date_query' => [
          'after' => date('Y-m-1 00:00:00', time()),
          'before' => date('Y-m-t 23:59:59', time()),
        ]
    )
);

$i = 0;
while($loop->have_posts()) {

  $loop->the_post();
  var_dump(get_the_title());
  continue;

  $calendar['calendar'][$i]['post_id'] = get_the_ID();
  $calendar['calendar'][$i]['title'] = get_the_title();
  $calendar['calendar'][$i]['permalink'] = get_permalink();
  $calendar['calendar'][$i]['time'] = $post->post_date;
  $calendar['calendar'][$i]['year'] = date('Y', strtotime($post->post_date));
  $calendar['calendar'][$i]['month'] = date('m', strtotime($post->post_date));
  $calendar['calendar'][$i]['day'] = date('d', strtotime($post->post_date));
  $calendar['calendar'][$i]['type'] = get_post_type();
  $calendar['calendar'][$i]['excerpt'] = get_the_excerpt();


  // $street_address = get_field('office_address');
  // if (!$street_address) $street_address = get_field('hearing_address');

  // if ($street_address) $street_address = $street_address.' '.get_field('city').', '.get_field('state').' '.get_field('zip_code');
  // if (!$street_address) $street_address = get_permalink();

  // $calendar['calendar'][$i]['address'] = $street_address;

  // $endate = (get_field('event_date_end') ? get_field('event_date_end') : get_field('event_date'));
  // $calendar['calendar'][$i]['enddate'] = $endate;

  // $calendar['calendar'][$i]['formatted_date'] = $calendar['calendar'][$i]['year'].'-'.$calendar['calendar'][$i]['month'].'-'.$calendar['calendar'][$i]['day'];

  $i++;

}
wp_reset_postdata();
//die('finished');
// // If this is just an ajax request
// // return that
// if (!empty($_POST['json']) && $_POST['json'] == 1)
// {

//   wp_send_json($data);

// } else {


//   $data = ExtendedTimber::get_context();

//   $javascript_data = array();
//   foreach ($calendar['calendar'] as $item) {

//       $javascript_data[] = [
//         'post_id' => $item['post_id'],
//         'date' => $item['formatted_date'],
//         'title' => $item['title'],
//         'permalink' => $item['permalink'],
//         'time' => $item['time'],
//         'type' => $item['type'],
//         'excerpt' => $item['excerpt'],
//         'enddate' => $item['enddate'],
//         'address' => $item['address']
//       ];

//   }

//   $data['javascript_data'] = json_encode($javascript_data);

//   $data['calendar'] = $calendar;

//   $data['calendar_refresh_url'] = get_template_directory_uri() . '/ajax/get-calendar-events.php';

//   //let's get the category id for news items
//   //we'll use this later
//   $newsid = get_term_by('slug','press-releases','category');
//   $newsid = $newsid->term_id;


Timber::render('index.twig', $data);



































