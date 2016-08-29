<?php

/**
 * Define your WordPress actions for your project.
 *
 * Based on the WordPress action hooks.
 * https://developer.wordpress.org/reference/hooks/
 *
 */

/**
 * Theme assets
 */
// add_action('wp_enqueue_scripts', function () {
//     wp_enqueue_style('code/main.css', asset_path('styles/main.css'), false, null);
//     wp_enqueue_script('code/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);
// }, 100);


/*
 * Customize login logo
 */

function my_login_logo() {
$logo = asset_path("images/logo.jpg");
echo <<<HTML
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url( $logo );
            padding-bottom: 30px;
            background-size: 150px;
            width: 150px;
            height: 150px;
        }
    </style>
HTML;
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );