<?php
$data = Timber::get_context();

$data['post'] = new ExtendedTimberPost();

// var_dump($data['post']->id, $data['post']->start_date, $data['post']->end_date, $data['post']->start_time, $data['post']->end_time, $data['post']->all_day, $data['post']->multi_day);
// die();

Timber::render('single.twig', $data);



