<?php

  ini_set( 'memory_limit', '750M' );
  require_once 'vendor/autoload.php';

if ( empty( $_SERVER['SERVER_NAME'] ) ) {
	$_SERVER['SERVER_NAME'] = 'CLI';
}

  date_default_timezone_set( 'America/New_York' );

if ( ! defined( 'ABSPATH' ) ) {
	require_once 'public/wp-load.php';
}

  clear_content_area();

  global $wpdb;
  $res = $wpdb->get_results( 'SELECT ID FROM grace_posts LIMIT 20000' );
foreach ( $res as $row ) {
	parse_pdf( $row->ID, true );
}
