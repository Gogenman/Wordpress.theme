<?php

add_action( 'wp_enqueue_scripts', 'style_and_scripts' );

add_theme_support('custom-logo');

function style_and_scripts() {
    //- Scripts:
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.1.min.js', false, null, true);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
    wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js', array('jquery'), null, true );
    //- Styles:
    wp_enqueue_style('reset', 'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', array('reset'));
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('slick-slider', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-slider-theme', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css');

}

// show_admin_bar( false );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array(about) );
add_theme_support('custom-background');
?>