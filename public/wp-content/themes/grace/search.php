<?php

$data = Timber::get_context();

$data['search_term'] = get_search_query( );
$data['posts'] = ExtendedTimber::get_posts(false, 'ExtendedTimberPost');
$data['pagination'] = Timber::get_pagination();

Timber::render('search.twig', $data);






