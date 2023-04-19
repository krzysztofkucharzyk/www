<?php 

// Dodaje pliki css
function first_styles() {
    wp_enqueue_style(
        'normalize',
        get_stylesheet_directory_uri() . '/assets/css/normalize.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style( 
        'bootstrap',
        get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style(
        'main-styles',
        get_stylesheet_uri(),
        array('normalize', 'bootstrap'),
        '1.0',
        'all'
    );
}
add_action( 'wp_enqueue_scripts', 'first_styles' );

//Dodaje pliki js
function first_scripts() {
    wp_enqueue_script( 
        'main-js', 
        get_stylesheet_directory_uri() . '/assets/js/main.js', 
        array('jquery'), 
        '1.0.0', 
        true 
    );
}
add_action( 'wp_enqueue_scripts' , 'first_scripts' );

// Dodaje support dla title tag
function theme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_setup');

// Tworzenie własnych class dla body
// Usuniecie dynamicznych class WP
function custom_classes() {
    return $my_custom_classes = array('first', 'second');
}
add_filter('body_class', 'custom_classes');




?>