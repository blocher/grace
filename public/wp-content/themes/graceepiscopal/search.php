<?php

$data = Timber::get_context();

$data['search_term'] = get_search_query();

$post_types_checked = get_query_var( 'post_types' );
if ( ! empty( $post_types_checked ) && ! is_array( $post_types_checked ) ) {
	$post_types_checked = explode( ',', $post_types_checked );
}
if ( empty( $post_types_checked ) ) {
	$post_types_checked = array( 'page', 'news', 'grace_notes', 'bulletin_insert' );
	set_query_var( 'post_types', $post_types_checked );
	$_GET['post_types'] = $post_types_checked;
}
$post_types = array(
	'page'              => 'Pages',
	'news'              => 'News',
	'event'             => 'Events',
	'sermon'            => 'Sermons',
	'grace_notes'       => 'Grace Notes',
	'bulletin_insert'   => 'Bulletin Inserts',
	'other_publication' => 'Other Publications',
);

foreach ( $post_types as $key => $value ) {
	if ( in_array( $key, $post_types_checked ) ) {
		$post_types[ $key ] = array(
			'checked' => true,
			'label'   => $value,
		);
	} else {
		$post_types[ $key ] = array(
			'checked' => false,
			'label'   => $value,
		);
	}
}
$data['post_types']   = $post_types;
$data['posts']        = ExtendedTimber::get_posts( false, 'ExtendedTimberPost' );
$data['pagination']   = Timber::get_pagination();
$data['did_you_mean'] = relevanssi_didyoumean( get_search_query(), "<p class='alert alert-warning'>Did you mean: ", '</p>', 5, false );

Timber::render( 'search.twig', $data );









