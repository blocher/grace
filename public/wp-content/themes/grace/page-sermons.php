<?php

/**
 * Template Name: Table Archive
 *
**/

$data = Timber::get_context();

$data['post'] = new ExtendedTimberPost();
$data['parent'] = new ExtendedTimberPost($data['post']->post_parent);

$post_type = $post->post_name;

$bucket = $post_type;

if ($post_type == 'sermons') {
  $post_type = 'sermon';
  $bucket = 'sermons';
}
if ($post_type == 'bulletin-inserts') {
  $post_type = 'bulletin_insert';
  $bucket = 'bulletin_inserts';
}
if ($post_type == 'grace-notes') {
  $post_type = 'grace_notes';
  $bucket = 'grace_notes';
}
if ($post_type == 'other_publication') {
  $post_type = 'other-publication';
  $bucket = 'other_publications';
}

$args = [

  'post_type' => $post_type,
  'nopaging' => true,
  'order' => 'DESC',

];

if ($post_type=='sermon') {

  $args['orderby'] = 'meta_value';
  $args['meta_key'] = 'date_given';
} else if ($post_type=='grace_notes') {
  $args['orderby'] = 'meta_value';
  $args['meta_key'] = 'published_date';
} else {
  $args['orderby'] = 'date';
}

$data[$bucket] = ExtendedTimber::get_posts($args,'ExtendedTimberPost');

Timber::render('page.twig', $data);