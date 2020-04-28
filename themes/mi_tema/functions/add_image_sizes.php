<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'square'		=> __( 'Tamaño del square' ),
		'galeria'	=> __( 'Tamaño personalizado de la galeria' ),
		'entradas'	=> __( 'Tamaño personalizado de las entradas' ),
		'detail'	=> __( 'Tamaño personalizado de los post individuales' )
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'square', 400, 400, true );			// Personalización del tamaño del square
	add_image_size( 'galeria', 360, 240, true );		// Personalizado de la galeria
	add_image_size( 'entradas', 360, 360, true );		// Personalizado de las entradas
	add_image_size( 'detail', 720, 360, true );			// Personalizado de los post individuales


	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
