<?php

/**
* A unique identifier is defined to store the options in the database and reference them from the theme.
* By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
* If the identifier changes, it'll appear as if the options have been reset.
*/

function optionsframework_option_name() {
	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
* Defines an array of options that will be used to generate the settings page and be saved in the database.
* When creating the 'id' fields, make sure to use all lowercase and no spaces.
*
* If you are making your theme translatable, you should replace 'html5reset'
* with the actual text domain for your theme.  Read more:
* http://codex.wordpress.org/Function_Reference/load_theme_textdomain
*/
/*
* Override a default filter * for 'textarea' sanitization and $allowedposttags + embed and script.
*/

add_action('admin_init','optionscheck_change_santiziation', 100);

function optionscheck_change_santiziation() {
	remove_filter( 'of_sanitize_textarea', 'of_sanitize_textarea' );
	add_filter( 'of_sanitize_textarea', 'custom_sanitize_textarea' );
}

function custom_sanitize_textarea($input) {
	global $allowedposttags;
	$custom_allowedtags["embed"] = array(
		"src" => array(),
		"type" => array(),
		"allowfullscreen" => array(),
		"allowscriptaccess" => array(),
		"height" => array(),
		"width" => array()
	);
	$custom_allowedtags["script"] = array();

	$custom_allowedtags = array_merge($custom_allowedtags, $allowedposttags);
	$output = wp_kses( $input, $custom_allowedtags);
	return $output;
}

function optionsframework_options() {
	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();

	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';

	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	$options = array();
	$options[] = array(
		'name' => __('Redes Sociales', 'HL'),
		'type' => 'heading');
		$options[] = array(
			'name' => __('Facebook', 'HL'),
			'id' => 'sn_facebook',
			'type' => 'text');
		$options[] = array(
			'name' => __('Twitter', 'HL'),
			'id' => 'sn_twitter',
			'type' => 'text');
		$options[] = array(
			'name' => __('Youtube', 'HL'),
			'id' => 'sn_youtube',
			'type' => 'text');
		$options[] = array(
			'name' => __('Instagram', 'HL'),
			'id' => 'sn_instagram',
			'type' => 'text');
	return $options;
}