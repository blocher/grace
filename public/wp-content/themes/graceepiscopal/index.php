<?php

$loader = new TimberLoader();

$data = Timber::get_context();


/****
** Homepage Slider
*****/
$args = array(
    'post_type' => 'slide',
    'orderby' => 'menu_order',
    'order' => 'ASC',
);
$data['slides'] = Timber::get_posts($args, 'ExtendedTimberPost');

$data['calendar_feed'] = 'https://calendar.google.com/calendar/embed?src=scsdgvstpivoaop3f3564ok9ds%40group.calendar.google.com&ctz=America/New_York';


/****
** Recent News
*****/
$args = array(
    'post_type' => 'news',
    'posts_per_page' => 3,
);
$data['news'] = Timber::get_posts($args, 'ExtendedTimberPost');

$args = array(
    'post_type' => ['grace_notes', 'bulletin_insert', 'other_publication'],
    'posts_per_page' => 3,
    'order' => 'DESC',
    'meta_key'   => 'published_date',
    'orderby'    => 'meta_value',
    'order'      => 'DESC',
);

Timber::render('index.twig', $data);






















