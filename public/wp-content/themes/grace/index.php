<?php

$loader = new TimberLoader();
$loader->clear_cache_timber();
$loader->clear_cache_twig();

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
$calendar['calendar'] = [];
$i=0;
$events = eventsSearch()->search(date('Y-m-1 00:00:00', time()), date('Y-m-t 23:59:59', time()));

foreach ($events as $event) {

  $calendar['calendar'][$i] = $event->calendarArray();
  $i++;

}

$data['calendar'] = $calendar;
// If this is just an ajax request
// return that
if (!empty($_POST['json']) && $_POST['json'] == 1)
{

  wp_send_json($data);

} else {


  $data = Timber::get_context();

  $dt = new DateTime("now", new DateTimeZone('America/New_York'));
  $start = $dt->format('Y-m-d 00:00:00');
  $dt->add(new DateInterval('P14D'));
  $end = $dt->format('Y-m-d 23:59:59');
  $events = eventsSearch()->search($start, $end);
  $data['events'] = array_slice($events,0,4);
  $data['events2'] = array_slice($events,4,8);

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
      'posts_per_page' => 3,
  );
  $data['news'] = Timber::get_posts($args, 'ExtendedTimberPost');


  $javascript_data = array();
  foreach ($calendar['calendar'] as $item) {

      $javascript_data[] = [
        'post_id' => $item['post_id'],
        'date' => $item['formatted_date'],
        'title' => $item['title'],
        'permalink' => $item['permalink'],
        'time' => $item['time'],
        'type' => $item['type'],
        'excerpt' => $item['excerpt'],
        'enddate' => $item['enddate'],
        'address' => $item['address']
      ];

  }

  $data['javascript_data'] = json_encode($javascript_data);

  $data['calendar'] = $calendar;

  $data['calendar_refresh_url'] = get_template_directory_uri() . '/ajax/get-calendar-events.php';

//   //let's get the category id for news items
//   //we'll use this later
//   $newsid = get_term_by('slug','press-releases','category');
//   $newsid = $newsid->term_id;


  Timber::render('index.twig', $data);
}





















