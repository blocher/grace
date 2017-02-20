<?php

  ini_set('memory_limit','750M');
  require_once('vendor/autoload.php');
  use Carbon\Carbon;

  if (empty($_SERVER['SERVER_NAME'])) {
    $_SERVER['SERVER_NAME'] = 'CLI';
  }

  date_default_timezone_set('America/New_York');

  if ( !defined('ABSPATH') ) {
    require_once( 'public/wp-load.php' );
  }


  define('APPLICATION_NAME', 'Grace Calendar Sync');
  define('SCOPES', implode(' ', array(
    Google_Service_Calendar::CALENDAR_READONLY)
  ));

  if (php_sapi_name() != 'cli') {
    throw new Exception('This application must be run on the command line.');
  }

  /**
   * Returns an authorized API client.
   * @return Google_Client the authorized client object
   */
  function getClient() {
    $client = new Google_Client();
    $client->setDeveloperKey('AIzaSyAqezaiecr8sKISZv7BV0sS2SnNXXKFav0');
    $client->setApplicationName(APPLICATION_NAME);
    $client->setScopes(SCOPES);
    $client->setAccessType('offline');

    return $client;
  }


  // Get the API client and construct the service object.
  $client = getClient();
  $service = new Google_Service_Calendar($client);

  $start_time = new Carbon('now', new DateTimeZone('America/New_York'));
  $start_time->subDays(120);
  $start_time = $start_time->format('c');

  $end_time = new Carbon('now', new DateTimeZone('America/New_York'));
  $end_time->addDays(365);
  $end_time = $end_time->format('c');

  // Print the next 10 events on the user's calendar.
  $calendarId = 'scsdgvstpivoaop3f3564ok9ds@group.calendar.google.com';
  $optParams = array(
    'maxResults' => 6000,
    'orderBy' => 'startTime',
    'singleEvents' => TRUE,
    'timeMin' => $start_time,
    'timeMax' => $end_time,
  );
  $results = $service->events->listEvents($calendarId, $optParams);


  foreach ($results->getItems() as $event) {

    $start = $event->start->dateTime;
    if (empty($start)) {
      $start = $event->start->date . ' 00:00:00';
    }
    $start = new Carbon($start, new DateTimeZone('America/New_York'));
    $start = $start->format('Y-m-d H:i:s');

    $end = $event->end->dateTime;
    if (empty($end)) {
      $end = $event->end->date . ' 23:59:59';
    }
    $end = new Carbon($end, new DateTimeZone('America/New_York'));
    $end = $end->format('Y-m-d H:i:s');

    $wp_event = [];
    $wp_event['event_title_google'] = $event->getSummary();
    $wp_event['event_description_google'] = $event->getDescription();
    $wp_event['event_start_time_google'] = $start;
    $wp_event['event_end_time_google'] = $end;
    $wp_event['event_location_google'] = $event->getLocation();
    $wp_event['google_id'] = $event->getId();
    $wp_event['google_url'] = $event->htmlLink;

    $args = array(
       'meta_query' => [
           [
               'key' => 'google_id',
               'value' => $wp_event['google_id'],
               'compare' => '=',
           ]
       ],
       'post_type' => 'event',
       'post_status' => ['publish', 'pending', 'draft','future','private']
    );

    $posts = get_posts($args);
    $id = count($posts) > 0 ? $posts[0]->ID : 0;
    echo $wp_event['google_id'] . '|' . $id . PHP_EOL;

    $args = [
      'ID' => $id,
      'post_date' => $wp_event['event_start_time_google'],
      'post_title' => $wp_event['event_title_google'],
      'post_status' => 'publish',
      'post_type' => 'event',

    ];

    $id = wp_insert_post($args, true);

    foreach ($wp_event as $key=>$value) {
      update_field($key,$value,$id);
    }


    echo $id . PHP_EOL;

  }
