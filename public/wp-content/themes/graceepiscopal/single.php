<?php

$data = Timber::get_context();

$data['post'] = new ExtendedTimberPost();
Timber::render('single.twig', $data);







