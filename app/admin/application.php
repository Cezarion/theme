<?php

/**
 * application.php - Write your custom code below.
 */

/*-----------------------------------------------------------------------*/
// Include helper functions.
/*-----------------------------------------------------------------------*/
include_once(themosis_path('app').'Helpers'.DS.'helpers.php');
include_once(themosis_path('app').'Helpers'.DS.'JsonManifest.php');
include_once(themosis_path('app').'Helpers'.DS.'jquery-cdn.php');
include_once(themosis_path('app').'Helpers'.DS.'clean-up.php');

/*-----------------------------------------------------------------------*/
// Admin assets
/*-----------------------------------------------------------------------*/
// Tell the TinyMCE editor to use a custom stylesheet
//add_editor_style(Assets\asset_path('styles/editor-style.css'));

/*-----------------------------------------------------------------------*/
// Global assets
/*-----------------------------------------------------------------------*/
// CSS
Asset::add('themosaka_css', asset_path('styles/main.css'), false, '1.0', 'all');

// JS
Asset::add('modernizr', asset_path('scripts/modernizr.js'), [], null, true);
Asset::add('themosaka_js', asset_path('scripts/main.js'), ['jquery'], null, true);

if (is_single() && comments_open() && get_option('thread_comments')) {
    Asset::add('themosaka', 'comment-reply');
}