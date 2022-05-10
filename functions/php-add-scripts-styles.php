<?php
add_action('wp_enqueue_scripts', 'add_theme_scripts');

function add_theme_scripts(){
	wp_enqueue_script('theme', get_template_directory_uri().'/assets/compiled/theme.js');
	wp_enqueue_style( 'theme', get_template_directory_uri().'/assets/compiled/theme.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/compiled/bootstrap.min.css');
}

function mind_defer_scripts( $tag, $handle, $src ) {
	$defer = array( 
	  'slick'
	);
	if ( in_array( $handle, $defer ) ) {
	   return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
	}
	return $tag;
} 
add_filter( 'script_loader_tag', 'mind_defer_scripts', 10, 3 );