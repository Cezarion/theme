<?php

/**
 * Define your WordPress actions for your project.
 *
 * Based on the WordPress action hooks.
 * https://developer.wordpress.org/reference/hooks/
 *
 */

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