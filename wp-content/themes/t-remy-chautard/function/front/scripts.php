<?php
function add_theme_scripts() {

    $template_data       = wp_get_theme();
    $template_version    = $template_data['Version'];

    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/./node_modules/bootstrap/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('swippercss', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), null);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css', array(), $template_version);

    wp_enqueue_script('jquery.min', get_template_directory_uri().'/assets/./node_modules/jquery/dist/jquery.min.js', array(), null, true);
    wp_enqueue_script('bootstrap.bundle.min', get_template_directory_uri().'/assets/./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_script('matchHeight-min', get_template_directory_uri().'/assets/./node_modules/jquery-match-height/dist/jquery.matchHeight-min.js', array(), null, true);
    wp_enqueue_script('swiperjs', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array(), $template_version, true);
   
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );