<?php

function pad( $num ) {
	return str_pad( $num, 2, '0', STR_PAD_LEFT );
}

date_default_timezone_set( 'America/New_York' );
use Carbon\Carbon;
// header('Content-Type: application/json');

if ( ! defined( 'ABSPATH' ) ) {
	require_once '../../../../wp-load.php';
}

$args = array(
	'start' => FILTER_SANITIZE_STRING,
	'end'   => FILTER_SANITIZE_STRING,
);

$input = filter_input_array( INPUT_GET, $args, true );

$events = eventsSearch()->search( $input['start'] . '00:00:00', $input['end'] . '23:59:59' );


$event_output = array();
foreach ( $events as $event ) {
	$start = get_field( 'event_start_time_use', $event->ID );
	$start = new Carbon( $start, new DateTimeZone( 'America/New_York' ) );

	$end = get_field( 'event_end_time_use', $event->ID );
	$end = new Carbon( $end, new DateTimeZone( 'America/New_York' ) );

	$allDay = $start->format( 'H:i' ) == '00:00' && $end->format( 'H:i' ) == '23:59' ? true : false;
	$data   = array(
		'title'  => get_field( 'event_title_use', $event->ID ),
		'url'    => get_permalink( $event->ID ),
		'start'  => $start->format( 'Y-m-d H:i:s' ),
		'end'    => $end->format( 'Y-m-d H:i:s' ),
		'allDay' => $allDay,
		'color'  => '#2B378F',

	);
	$event_output[] = $data;
}
echo json_encode( $event_output );
