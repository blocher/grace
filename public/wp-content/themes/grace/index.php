<?php


$data = Timber::get_context();


/****
** Homepage Slider
*****/
$args = array(
    'post_type' => 'slide',
    'order_by' => 'menu_order',
    'order' => 'ASC',
);
$data['slides'] = Timber::get_posts($args, 'ExtendedTimberPost');


/****
** Recent News
*****/
$args = array(
    'post_type' => 'news',
    'post_per_page' => 3,
);
$data['news'] = Timber::get_posts($args, 'ExtendedTimberPost');


Timber::render('index.twig', $data);



































