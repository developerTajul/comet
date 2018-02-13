<?php

add_action('after_setup_theme', 'comet_theme_setup'); 

function comet_theme_setup(){

	add_theme_support('title-tag');

	add_theme_support('post-formats', array(
		'gallery',
		'video',
		'quote',
		'image',
		'audio'
	));

}


/**
*
* adding fonts
*
*/
function get_comet_fonts(){
	$fonts = array();
	$fonts[] = 'Montserrat:400,700';
	$fonts[] = 'Raleway:300,400,500';
	$fonts[] = 'Halant:300,400';

	$comet_fonts = add_query_arg( array(
		'family'	=> urlencode(implode('|', $fonts))
		// 'family'	=> implode('|', $fonts)
	), 'https://fonts.googleapis.com/css');


	return $comet_fonts;

}


add_action('wp_enqueue_scripts', 'comet_theme_all_files');

function comet_theme_all_files(){

	/**
	*
	* all css files
	*/
	wp_enqueue_style('comet-bundle', get_template_directory_uri().'/assets/css/bundle.css', array(), '1.0.1', 'all');

	wp_enqueue_style('comet-style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.2', 'all');

	wp_enqueue_style('comet-fonts', get_comet_fonts() );

	


	/**
	* all js files
	*
	*/

	wp_enqueue_script('comet-bundle', get_template_directory_uri().'/assets/js/bundle.js', array('jquery'), '3.0.1', true);

	wp_enqueue_script('comet-maps', '//maps.googleapis.com/maps/api/js?v=3.exp', array('jquery'), '3.0.2', true);

	wp_enqueue_script('comet-', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '3.0.3', true);

	



}
