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

	add_theme_support('post-thumbnails');

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



/**
*
* comet theme css, js and conditional js files
*
*
*/

if( file_exists( dirname(__FILE__).'/inc/theme_all_files.php' ) ){
	
	require_once( dirname(__FILE__).'/inc/theme_all_files.php');

}


/**
*
* CMB2 Metabox
*
*/

if( file_exists( dirname(__FILE__).'/libs/cmb2/custom-cmb2.php') ){

	require_once( dirname(__FILE__).'/libs/cmb2/custom-cmb2.php');
	
}



/**
*
* Redux Framework
*
*/

// framework file
if( file_exists( dirname(__FILE__).'/libs/redux/ReduxCore/framework.php') ){

	require_once( dirname(__FILE__).'/libs/redux/ReduxCore/framework.php');

}

// barebones-config file
if( file_exists( dirname(__FILE__).'/libs/redux/sample/barebones-config.php') ){

	require_once( dirname(__FILE__).'/libs/redux/sample/barebones-config.php');

}




