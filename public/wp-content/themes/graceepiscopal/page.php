<?php

$data = Timber::get_context();

$data['post'] = new ExtendedTimberPost();

$data['parent'] = new ExtendedTimberPost($data['post']->post_parent);

if ($data['post']->post_name=='calendar') {
  $data['calendar'] = true;
}

Timber::render('page.twig', $data);









