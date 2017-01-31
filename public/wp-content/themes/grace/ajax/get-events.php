<?php

date_default_timezone_set('America/New_York');

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


$input['type'] = $input['type'] == 'range' || $input['type'] == 'single' || $input['type'] == 'counts' || $input['type'] == 'month' ? $input['type'] : 'upcoming';

if (empty($input['start_day']) || $input['start_day']<0 || $input['start_day']>31) {
  $input['start_day'] = date('d');
}

if (empty($input['start_month']) || $input['start_month']<0 || $input['start_month']>12) {
  $input['start_month'] = date('m');
}

if (empty($input['start_year']) || $input['start_year']<1900 || $input['start_year']>2050) {
  $input['start_year'] = date('Y');
}

if (empty($input['end_day']) || $input['end_day']<0 || $input['end_day']>31) {
  $input['end_day'] = date('d');
}

if (empty($input['end_month']) || $input['end_month']<0 || $input['end_month']>12) {
  $input['end_month'] = date('m');
}

if (empty($input['end_year']) || $input['end_year']<1900 || $input['end_year']>2050) {
  $input['end_year'] = date('Y');
}

$input['limit'] = empty($input['limit']) ? 100 : $input['limit'];


$start_day = $input['start_year'] . '-' . $input['start_month'] . '-' . $input['start_day'];
$end_day = $input['end_year'] . '-' . $input['end_month'] . '-' . $input['end_day'];



switch ($input['type']) {
  case 'range' :

    $start = $input['start_year'] . '-' . $input['start_month'] . '-' . $input['start_day'] . ' 00:00:00';
    $end = $input['end_year'] . '-' . $input['end_month'] . '-' . $input['end_day'] . ' 23:59:59';

    break;

  case 'month' :

    $start = $input['start_year'] . '-' . $input['start_month'] . '-' . 01 . ' 00:00:00';
    $end = $input['start_year'] . '-' . $input['start_month'] . '-' . date('t', strtotime($input['end_day'])) . ' 23:59:59';

    break;

  case 'single' :

    $start = $input['start_year'] . '-' . $input['start_month'] . '-' . $input['start_day'] . ' 00:00:00';
    $end = $input['start_year'] . '-' . $input['start_month'] . '-' . $input['start_day'] . ' 23:59:59';

    break;

  case 'counts' :

    $start = $input['start_year'] . '-' . $input['start_month'] . '-' . 1 . ' 00:00:00';
    $days_in_month = date('t', strtotime($start));
    $end = $input['start_year'] . '-' . $input['start_month'] . '-' .$days_in_month . ' 23:59:59';

    break;

  default : //upcoming

    $start = $input['start_year'] . '-' . $input['start_month'] . '-' . $input['start_day'] . ' 00:00:00';
    $end = '2999-12-31 23:59:59';

}
$events = eventsSearch()->search($start, $end);

if ($input['type'] == 'counts') {

  $counts = [];
  foreach ($events as $event) {

    $month = $event->start->format('m');
    $day = $event->start->format('d');
    $year = $event->start->format('Y');
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

  $data = [
    'title' => $event->post_title,
    'link' => $event->link(),
    'month' => $event->start->format('F'),
    'day' => $event->start->format('j'),
    'time' => $event->start->format('g:i A'),

  ];
  $event_output .= Timber::compile('partials/event.twig', $data);
}

echo $event_output;
