<?php

$data = Timber::get_context();

$data['post'] = new ExtendedTimberPost();

$type = $data['post']->post_type;

if ($type=='sermon' || $type=='grace_notes' || $type=='bulletin_insert' || $type=='other_publication') {

    $pdf = get_field('pdf',$data['post']->ID);
    if (is_array($pdf)) {
      $pdf = $pdf['url'];
    }
    wp_redirect($pdf, 302);
    die();
}

if ($type=='alert' || $type=='slide') {

    global $wp_query;
    $wp_query->set_404();
    status_header( 404 );
    get_template_part( 404 );
    exit();

}

Timber::render('single.twig', $data);







