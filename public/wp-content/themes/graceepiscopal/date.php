<?php

global $wp_query;
$args          = $wp_query->query_vars;
$data['title'] = ucwords( $args['post_type'] );
$class         = 'ExtendedTimberPost';
if ( $args['post_type'] == 'event' || $args['post_type'] == 'ai1ec_event' ) {
	$class         = 'TimberPostEvent';
	$data['title'] = 'Events';
}
$data = Timber::get_context();

$data['posts']      = Timber::get_posts( $args, $class );
$data['pagination'] = Timber::get_pagination();

Timber::render( 'archive.twig', $data );
