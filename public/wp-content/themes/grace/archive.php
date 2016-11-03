<?php

global $wp_query;
$args = $wp_query->query_vars;

$class = 'ExtendedTimberPost';
if ($args['post_type']=='event' || $args['post_type']=='ai1ec_event') {
  $class = 'TimberPostEvent';
}
$data = Timber::get_context();

$data['title'] = 'Upcoming events';
$data['posts'] = Timber::get_posts($args, $class);
$data['pagination'] = Timber::get_pagination();

Timber::render('search.twig', $data);