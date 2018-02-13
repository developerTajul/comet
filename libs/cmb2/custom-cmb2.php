<?php 


require_once('init.php');


add_action('cmb2_admin_init', 'comet_custom_metabox');

function comet_custom_metabox(){

	$post = new_cmb2_box(array(
		'id'	=> 'comet-posts',
		'title'	=> 'Extra Post Info ',
		'object_types'	=> array('post')
	));

	$post->add_field(array(
		'name'	=> 'Youtube Video Link',
		'desc'	=> 'You can add any youtube video here',
		'id'	=> 'video-link',
		'type'	=> 'oembed',
		'default' => 'https://www.youtube.com/watch?v=_5mz27NN9s0'
	));

}