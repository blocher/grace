<?php

$data = Timber::get_context();

$data['post'] = new ExtendedTimberPost();

$data['parent'] = new ExtendedTimberPost($data['post']->post_parent);

if ($data['post']->post_name=='calendar') {
  Timber::render('calendar.twig', $data);
} else {
  Timber::render('page.twig', $data);
}








