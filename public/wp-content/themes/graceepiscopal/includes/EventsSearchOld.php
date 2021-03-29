<?php

class EventsSearchOld extends Singleton {


	protected $registry;
	protected $search;

	/**
	 * @var Singleton The reference to *Singleton* instance of this class
	 */
	protected static $instance;

	protected function __construct() {
		global $ai1ec_front_controller;
		$this->registry = $ai1ec_front_controller->return_registry( false );
		$this->search   = $this->registry->get( 'Ai1ec_Event_Search' );
	}


	public function time( $time, $timezone = 'America/New_York' ) {

		return new Ai1ec_Date_Time( $this->registry, $time, $timezone );

	}

	public function search( $start, $end ) {

		$results = $this->search->get_events_between( $this->time( $start ), $this->time( $end ) );

		$results = array_map( array( $this, 'eventToTimber' ), $results );

		usort( $results, array( $this, 'sort' ) );

		return $results;

	}

	public function getEvent( $post_id ) {
		return $this->search->get_event( $post_id );
	}

	protected function eventToTimber( $event ) {
		return new TimberPostEvent( $event );
	}

	protected function sort( $a, $b ) {
		if ( $a->start->format( 'U' ) == $b->start->format( 'U' ) ) {
			return 0;
		}
		return $a->start->format( 'U' ) < $b->start->format( 'U' ) ? -1 : 1;
	}

}



