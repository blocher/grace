<?php

/**
 * Template Name: Sermons
 *
**/

$data = Timber::get_context();

$data['post'] = new ExtendedTimberPost();

$data['parent'] = new ExtendedTimberPost($data['post']->post_parent);

$args = [

  'post_type' => 'sermon',
  'nopaging' => true,
  'order' => 'DESC',
  'orderby' => 'meta_value',
  'meta_key' => 'date_given',

];

$data['sermons'] = ExtendedTimber::get_posts($args,'ExtendedTimberPost');

// foreach ($data['sermons'] as $sermon) {
//   $pdf = $sermon->get_field('pdf');
//   var_dump($pdf);
// }
// die();
Timber::render('page.twig', $data);