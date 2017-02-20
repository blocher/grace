<?php
ini_set('memory_limit','750M');
if (empty($_SERVER['SERVER_NAME'])) {
  $_SERVER['SERVER_NAME'] = 'CLI';
}

date_default_timezone_set('America/New_York');

// header('Content-Type: application/json');

if ( !defined('ABSPATH') ) {
  require_once( 'public/wp-load.php' );
}

$args = [

  'post_type' => ['ai1ec_event', 'post', 'event'],
  'nopaging' => true,
  'post_status' => ['publish', 'pending', 'draft', 'auto-draft','future','private','inherit','trash','any' ]

];

$events = get_posts($args);
foreach ($events as $event) {
  echo $event->ID . PHP_EOL;
  wp_delete_post( $event->ID, true );
}