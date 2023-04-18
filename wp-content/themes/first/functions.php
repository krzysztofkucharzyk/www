<?php 

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

function first_scripts() {
    wp_enqueue_script(
        'main-scripts',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts' , 'first_scripts' );



?>