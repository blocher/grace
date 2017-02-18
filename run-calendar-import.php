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


echo 'Setting up import' . PHP_EOL;
global $ai1ec_front_controller;
$registry = $ai1ec_front_controller->return_registry(false);
$ics = $registry->get('Ai1ecIcsConnectorPlugin');
echo 'Starting import' . PHP_EOL;
$ics->cron();
echo 'Finished import' . PHP_EOL;