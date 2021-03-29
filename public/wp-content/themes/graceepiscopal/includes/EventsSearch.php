<?php

class EventsSearch extends Singleton {


	/**
	 * @var Singleton The reference to *Singleton* instance of this class
	 */
	protected static $instance;

	protected function __construct() {

	}



	public function search( $start, $end ) {

		$args = array(
			'post_type'  => 'event',
			'meta_query' => array(
				'relation' => 'AND',
				array(
					'key'     => 'event_start_time_use',
					'value'   => $start,
					'compare' => '>=',
				),
				array(
					'key'     => 'event_start_time_use',
					'value'   => $end,
					'compare' => '<=',
				),
			),
			'orderby'    => 'meta_value',
			'meta_key'   => 'event_start_time_use',
			'order'      => 'ASC',
			'nopaging'   => true,
		);

		return get_posts( $args );

	}



}



