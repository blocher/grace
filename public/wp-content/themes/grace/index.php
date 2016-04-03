<?php


$data = Timber::get_context();

    $args = array(
        'post_type' => 'slide',
        'order_by' => 'menu_order',
        'order' => 'ASC',
    );
    $data['slides'] = Timber::get_posts($args);

Timber::render('index.twig', $data);



































