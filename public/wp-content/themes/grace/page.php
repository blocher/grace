<?php

$data = Timber::get_context();

$data['post'] = new ExtendedTimberPost();


if (has_post_thumbnail( $data['post']->ID )) {
  $data['header_photo'] = $data['post']->get_thumbnail()->src('page_header');
} else if (empty ($data['header_photo'])) {

  $default_photos = get_field('default_page_headers','option');
  $photo_number = rand(0, count($default_photos)-1);
  $data['header_photo'] = $default_photos[$photo_number]['photo']['sizes']['page_header'];

}



$data['post'] = new ExtendedTimberPost();
$data['parent'] = new ExtendedTimberPost($data['post']->post_parent);

Timber::render('page.twig', $data);






