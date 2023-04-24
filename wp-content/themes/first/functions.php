<?php

// Dodaje pliki css
function first_styles()
{
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
        'superfish',
        get_stylesheet_directory_uri() . '/assets/css/superfish.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style(
        'main-styles',
        get_stylesheet_uri(),
        array('normalize', 'bootstrap'),
        '2.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'first_styles');

//Dodaje pliki js
function first_scripts()
{
    wp_enqueue_script( 
        'superfish',
        get_stylesheet_directory_uri() . '/assets/js/superfish.min.js',
        array('jquery'),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'main-js',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        '1.0.0',
        true
    );

    $translation_array = array(
        'email_placeholder' => esc_attr__('Wpisz swój adres e-mail', 'first'),
        'name_placeholder'  => esc_html__('Wpisz swoje imię', 'first')
    );
    wp_localize_script('main-js', 'translated_text_object', $translation_array);

}
add_action('wp_enqueue_scripts', 'first_scripts');


function theme_setup()
{
    //Szablon gotowy do tłumaczeń
    load_theme_textdomain( 'first', get_stylesheet_directory() . '/languages');

    // Dodaje support dla title tag
    add_theme_support('title-tag');

    // Dodaje możliwość dodania logo
    add_theme_support('custom-logo');

    // Dodaje możliwość korzystania z menu i ich dodawania
    // Translation ready using __()
    register_nav_menus(
        array(
            'header' => esc_html__('Nawigacja dla headera', 'first'),
            'footer' => esc_html__('Nawigacja dla footera', 'first'),
        )
    );

}
add_action('after_setup_theme', 'theme_setup');

// Tworzenie własnych class dla body
// Usuniecie dynamicznych class WP
// function custom_classes()
// {
//     return $my_custom_classes = array('first', 'second');
// }
// add_filter('body_class', 'custom_classes');


function sidebars() {
    register_sidebar( 
        array(
            'name'          => esc_html__( 'Footer one','first' ),
            'id'            => 'footer-one',
            'description'   => esc_html__( 'Stopka jeden', 'first' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar( 
        array(
            'name'          => esc_html__( 'Footer two','first' ),
            'id'            => 'footer-two',
            'description'   => esc_html__( 'Stopka dwa', 'first' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
}
add_action( 'widgets_init', 'sidebars' );

add_filter('https_ssl_verify', '__return_false');

?>