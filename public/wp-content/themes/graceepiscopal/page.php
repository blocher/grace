<?php

$data = Timber::get_context();

$data['post'] = new ExtendedTimberPost();

$data['parent'] = new ExtendedTimberPost($data['post']->post_parent);

Timber::render('page.twig', $data);






