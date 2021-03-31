<?php

  use Carbon\Carbon;

class ImportEvents {

	protected $developer_key = 'AIzaSyAqezaiecr8sKISZv7BV0sS2SnNXXKFav0';
	protected $client;
	protected $service;
	protected $application_name = 'Grace Calendar Sync';
	protected $scopes;
	protected $calendarId = 'c_8npl4k7cfkuc0rj6gnvkasofno@group.calendar.google.com';
	protected $start_time;
	protected $end_time;

	public function __construct() {

		$this->bootstrap();
		$this->setScopes();
		$this->setGoogleClientAndSerice();
		$this->setTimes();
		$this->import();

		echo 'constructed';

	}

	protected function bootstrap() {

		if ( php_sapi_name() != 'cli' ) {
			throw new Exception( 'This application must be run on the command line.' );
		}
		ini_set( 'memory_limit', '750M' );
		require_once 'vendor/autoload.php';
		if ( ! defined( 'ABSPATH' ) ) {
			require_once 'public_html/wp-load.php';
		}
		date_default_timezone_set( 'America/New_York' );
		if ( empty( $_SERVER['SERVER_NAME'] ) ) {
			$_SERVER['SERVER_NAME'] = 'CLI';
		}

	}

	protected function setGoogleClientAndSerice() {
		$client = new Google_Client();
		$client->setDeveloperKey( $this->developer_key );
		$client->setApplicationName( $this->application_name );
		$client->setScopes( $this->scopes );
		$client->setAccessType( 'offline' );
		$this->client = $client;

		$this->service = new Google_Service_Calendar( $client );
	}

	protected function setScopes() {
		$this->scopes = implode( ' ', array( Google_Service_Calendar::CALENDAR_READONLY ) );
	}

	protected function update_event( $event ) {

		$status = $event->status;

		$status       = $status == 'cancelled' ? 'trash' : 'publish';
		$google_ids[] = $event->getId();
		$start        = $event->start->dateTime;
		if ( empty( $start ) ) {
			$start = $event->start->date . ' 00:00:00';
		}
		$start = new Carbon( $start, new DateTimeZone( 'America/New_York' ) );
		$start = $start->format( 'Y-m-d H:i:s' );

		$end = $event->end->dateTime;
		if ( empty( $end ) ) {
			$end = $event->end->date . ' 23:59:59';
		}
		$end = new Carbon( $end, new DateTimeZone( 'America/New_York' ) );
		$end->subDay( 1 );
		$end = $end->format( 'Y-m-d H:i:s' );

		$wp_event                             = array();
		$wp_event['event_title_google']       = $event->getSummary();
		$wp_event['event_description_google'] = $event->getDescription();
		$wp_event['event_start_time_google']  = $start;
		$wp_event['event_end_time_google']    = $end;
		$wp_event['event_location_google']    = $event->getLocation();
		$wp_event['google_id']                = $event->getId();
		$wp_event['google_url']               = $event->htmlLink;

		$args = array(
			'meta_query'  => array(
				array(
					'key'     => 'google_id',
					'value'   => $wp_event['google_id'],
					'compare' => '=',
				),
			),
			'post_type'   => 'event',
			'post_status' => array( 'publish', 'pending', 'draft', 'future', 'private', 'trash' ),
		);

		$posts = get_posts( $args );
		$id    = count( $posts ) > 0 ? $posts[0]->ID : 0;

		$args = array(
			'ID'          => $id,
			'post_date'   => $wp_event['event_start_time_google'],
			'post_title'  => $wp_event['event_title_google'],
			'post_status' => $status,
			'post_type'   => 'event',

		);

		$id = wp_insert_post( $args, true );

		foreach ( $wp_event as $key => $value ) {
			update_field( $key, $value, $id );
		}

		post_process_event( $id );
		echo $id . '|' . $wp_event['google_id'] . ' | ' . $wp_event['event_title_google'] . ' | ' . $status . PHP_EOL;
	}

	public function get_page( $optParams ) {

		echo PHP_EOL . 'NEW PAGE' . PHP_EOL;

		try {
			$results = $this->service->events->listEvents( $this->calendarId, $optParams );
		} catch ( \Google_Service_Exception $e ) {
			$code = $e->getCode();
			if ( $code == 410 ) {
				echo PHP_EOL . 'NEED TO RESYNC' . PHP_EOL;
				$optParams = array(
					'maxResults'   => 250,
					'singleEvents' => true,
					'timeMin'      => $this->start_time,
					'timeMax'      => $this->end_time,
					'showDeleted'  => true,
				);
				return $this->get_page( $optParams );
			}
		}

		foreach ( $results->getItems() as $event ) {
			$this->update_event( $event );
		}

		if ( $results->getNextPageToken() ) {
			$optParams = array(
				'pageToken'    => $results->getNextPageToken(),
				'maxResults'   => 250,
				'singleEvents' => true,
				'timeMin'      => $this->start_time,
				'timeMax'      => $this->end_time,
				'showDeleted'  => true,
			);
			return $this->get_page( $optParams );
		}
		update_option( 'google_calendar_sync_token', $results->getNextSyncToken() );
		echo 'sync token update: ' . $results->getNextSyncToken();
		dd();

	}

	protected function setTimes() {

		$start_time = new Carbon( 'now', new DateTimeZone( 'America/New_York' ) );
		$start_time->subDays( 120 );
		$this->start_time = $start_time->format( 'c' );

		$end_time = new Carbon( 'now', new DateTimeZone( 'America/New_York' ) );
		$end_time->addDays( 365 );
		$this->end_time = $end_time->format( 'c' );
	}

	public function import() {

		$sync_token = get_option( 'google_calendar_sync_token', false );

		if ( $sync_token ) {
			$optParams = array(
				'syncToken' => $sync_token,
			);
		} else {
			$optParams = array(
				'maxResults'   => 250,
				'singleEvents' => true,
				'timeMin'      => $this->start_time,
				'timeMax'      => $this->end_time,
				'showDeleted'  => true,
			);
		}
		return $this->get_page( $optParams );
	}


}

  new ImportEvents();
