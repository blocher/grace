<?php

function bootstrap() {

	echo 'CONFIRMING ON CLI' . PHP_EOL;
	if ( php_sapi_name() != 'cli' ) {
		throw new Exception( 'This application must be run on the command line.' );
	}
	echo 'SETTING MEMORY LIMIT' . PHP_EOL;
	ini_set( 'memory_limit', '3000M' );
	echo 'autoloading' . PHP_EOL;
	require_once 'vendor/autoload.php';
	      echo 'CHECKING IF WordPress IS LOADED';
	      if ( ! defined( 'ABSPATH' ) ) {
	          echo 'LOADING WordPress';
	          require_once 'public_html/wp-load.php';
	      }
	echo 'SETTING TIMEZONE' . PHP_EOL;
	date_default_timezone_set( 'America/New_York' );
	echo 'CHECKING THAT SERVER NAME IS SET';
	if ( empty( $_SERVER['SERVER_NAME'] ) ) {
		echo 'SETTING SERVER NAME';
		$_SERVER['SERVER_NAME'] = 'CLI';
	}

	echo 'PURGING CACHE';
	//sg_cachepress_purge_everything();

	echo 'BOOTSTRAPPING COMPLETE' . PHP_EOL;
}

bootstrap();

global $wpdb;
$sql = 'select Distinct(post_id) from grace_postmeta where meta_value like "O:31%"';
$posts = $wpdb->get_col($sql);
foreach ($posts as $post) {
	$items = get_post_meta($post);
	foreach ($items as $key => $item) {
		if (is_array($item)) {
			$item = $item[0];
		}
		if (substr($item, 0, 4) == "O:31") {
			print($key . PHP_EOL);
			$value = unserialize($item);
			print(".");
			update_post_meta($post, $key, $value->getValue());
		}

	}
}
