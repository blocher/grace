<?php










  // Get the API client and construct the service object.
  $client = getClient();
  $service = new Google_Service_Calendar($client);

  $start_time = new Carbon('now', new DateTimeZone('America/New_York'));
  $start_time->subDays(120);
  $start_time = $start_time->format('c');

  $end_time = new Carbon('now', new DateTimeZone('America/New_York'));
  $end_time->addDays(365);
  $end_time = $end_time->format('c');

  $sync_token = get_option( 'google_calendar_sync_token',false);
  $sync_token = false;

  $calendarId = 'scsdgvstpivoaop3f3564ok9ds@group.calendar.google.com';

  if ($sync_token) {
    $optParams= [
      'syncToken' => $sync_token,
    ];
  } else {
      $optParams = array(
        'maxResults' => 100,
        'singleEvents' => TRUE,
        'timeMin' => $start_time,
        'timeMax' => $end_time,
        'showDeleted' => TRUE,
        'calendarId' => $calendarId,
      );

  }


  get_google_calendar_page($optParams, $service);

  function get_google_calendar_page($optParams, $service, $calendarId) {

    echo PHP_EOL . 'NEW PAGE' . PHP_EOL;

    $results = $service->events->listEvents($calendarId, $optParams);

    $google_ids = [];
    foreach ($results->getItems() as $event) {
      update_google_event($event);
    }

    if ($results->getNextPageToken()) {
      $optParams = [
        'nextPageToken' => $results->getNextPageToken(),
      ];
      get_page($optParams, $service, $calendarId);
    } else {
      update_option('google_calendar_sync_token', $results->getNextSyncToken());
      echo 'sync token update: '  . $results->getNextSyncToken();
      dd();
    }

  }

  function update_google_event($event) {

    $status = $event->status;

    $status = $status == 'cancelled' ? 'trash' : 'publish';
    $google_ids[] = $event->getId();
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
    $end->subDay(1);
    $end = $end->format('Y-m-d H:i:s');

    $location = $event->getLocation();

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
       'post_status' => ['publish', 'pending', 'draft','future','private','trash']
    );

    $posts = get_posts($args);
    $id = count($posts) > 0 ? $posts[0]->ID : 0;
    echo $wp_event['google_id'] . '|' . $id . PHP_EOL;

    $args = [
      'ID' => $id,
      'post_date' => $wp_event['event_start_time_google'],
      'post_title' => $wp_event['event_title_google'],
      'post_status' => $status,
      'post_type' => 'event',

    ];

    $id = wp_insert_post($args, true);

    foreach ($wp_event as $key=>$value) {
      update_field($key,$value,$id);
    }


    post_process_event($id);
    echo $id . ' | ' .  $wp_event['event_title_google'] . ' | ' . $status .  PHP_EOL;
  }





