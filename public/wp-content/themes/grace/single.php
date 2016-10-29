<?php

$data = Timber::get_context();

$data['post'] = new ExtendedTimberPost();
echo $post->post_type; die();
Timber::render('single.twig', $data);







