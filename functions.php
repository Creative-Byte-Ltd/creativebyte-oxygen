<?php

function cb_oxy_minimum_enqueue_scripts() {
    // Load main stylesheet
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
}
add_action( 'wp_enqueue_scripts', 'cb_oxy_minimum_enqueue_scripts' );
