<?php

return [

	/*
	* Edit this file to add features to your theme.
	* Un-comment each feature to add it.
	* http://codex.wordpress.org/Function_Reference/add_theme_support
	*/

	/* --------------------------------------------------------------- */
	// Enable post thumbnails
	/* --------------------------------------------------------------- */
	'post-thumbnails' => ['post'],

	/* --------------------------------------------------------------- */
	// Enable post formats (aside, gallery, link, image, ...)
	/* --------------------------------------------------------------- */
	'post-formats' => [],

	/* --------------------------------------------------------------- */
	// Enable title tag
	/* --------------------------------------------------------------- */
	'title-tag',

	/* --------------------------------------------------------------- */
	// Enable HTML5 features
	/* --------------------------------------------------------------- */
	'html5' => ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption'],


    /* --------------------------------------------------------------- */
    // Enable Soil Plugin features
    /* --------------------------------------------------------------- */

    // Cleaner WordPress markup
    'soil-clean-up',

    //Disable asset versioning
    'soil-disable-asset-versioning',

    //Disable trackbacks
    'soil-disable-trackbacks',

    //Google Analytics (more info)
    //'soil-google-analytics' => ['UA-XXXXX-Y'],

    //Load jQuery from the jQuery CDN
    'soil-jquery-cdn',

    //Move all JS to the footer
    'soil-js-to-footer',

    //Cleaner walker for navigation menus
    // 'soil-nav-walker',

    //Convert search results from /?s=query to /search/query/
    'soil-nice-search',

    //Root relative URLs
    'soil-relative-urls',

	/* --------------------------------------------------------------- */
	// Enable feed links in head
	/* --------------------------------------------------------------- */
	//'automatic-feed-links',

	/* --------------------------------------------------------------- */
	// Enable custom background (since WP 3.4)
	/* --------------------------------------------------------------- */
	//'custom-background'	=> [
	//	'default-color'          => '',
	//	'default-image'          => '',
	//	'wp-head-callback'       => '_custom_background_cb',
	//	'admin-head-callback'    => '',
	//	'admin-preview-callback' => ''
	//],

	/* --------------------------------------------------------------- */
	// Enable custom header (not compatible for versions < WP 3.4)
	/* --------------------------------------------------------------- */
	//'custom-header'	=>	[
	//	'default-image'          => '',
	//	'random-default'         => false,
	//	'width'                  => 0,
	//	'height'                 => 0,
	//	'flex-height'            => false,
	//	'flex-width'             => false,
	//	'default-text-color'     => '',
	//	'header-text'            => true,
	//	'uploads'                => true,
	//	'wp-head-callback'       => '',
	//	'admin-head-callback'    => '',
	//	'admin-preview-callback' => '',
	//]

];