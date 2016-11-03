<?php

require('../../../../wp-load.php');


$calendar = [];

// Months Array
$current_month = date('m');
$calendar['selected_month'] = $current_month;
$calendar['months'] = [
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
];

if (!empty($_POST['calendar-month'])) {
    $calendar['selected_month'] = $_POST['calendar-month'];
}


// Year Array
$oldest_year = 2010;
$current_year = date('Y');
$calendar['selected_year'] = $current_year;

$calendar['years'] = array();
while ($oldest_year <= $current_year)
{
    $calendar['years'][$oldest_year] = $oldest_year;

    $oldest_year++;
}

// Get Year
if (isset($_POST['calendar-year']) && !empty($_POST['calendar-year'])) {
 $calendar['selected_year'] = $_POST['calendar-year'];
}

// Get Month
if (array_key_exists($calendar['selected_month'], $calendar['months'])) {
    $start_date = $calendar['months'][$calendar['selected_month']].' 1, '.$calendar['selected_year'];
} else {
    $start_date = date('F 1, Y');;
}

$searchStart = (empty($_POST['calendar-year'])) ? date('Y-m-1 00:00:00', time()) : date('Y-m-1 00:00:00', strtotime($start_date));
$searchEnd = (empty($_POST['calendar-year'])) ? date('Y-m-t 23:59:59', time()) : date('Y-m-t 23:59:59', strtotime($start_date));

$calendar['calendar'] = array();
$i=0;
$events = eventsSearch()->search(date('Y-m-1 00:00:00', time()), date('Y-m-t 23:59:59', time()));

foreach ($events as $event) {

  $calendar['calendar'][$i] = $event->calendarArray();
  $i++;

}


wp_send_json($calendar);