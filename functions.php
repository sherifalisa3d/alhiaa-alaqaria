<?php
/*
Theme Name:     Alhiaa Alaqaria     
Template:       theme
Version:        1.0.0
*/

add_action( 'wp_enqueue_scripts', 'alh_enqueue_styles' );
function ag_enqueue_styles() {
    wp_enqueue_style( 'theme-child', get_stylesheet_uri() );
}
// Constants
define('ALH_DIR', __DIR__.'/');