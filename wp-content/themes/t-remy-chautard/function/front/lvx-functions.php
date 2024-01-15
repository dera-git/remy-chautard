<?php

function lvx_theme_setup(){
    add_theme_support( 'title-tag' );
    load_theme_textdomain( 'remy_chautart_lvx' );
    add_theme_support('post-thumbnails');
    add_image_size( 'post-image', 565, 554 );
    add_image_size( 'thumbnails-report-ent', 843, 993 );
}

add_action('after_setup_theme', 'lvx_theme_setup');

function footer_black_class(){
    $class = "";
    if (is_page_template('page-footer-black.php') || is_404()) {
        $class = "kl-footer-black";
    }
    return $class;
}

?>
