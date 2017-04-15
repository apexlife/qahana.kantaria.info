<?php

function qahana_scripts() {
    //CSS
    wp_enqueue_style('styel.css', get_stylesheet_uri());
    //JavaScript
    wp_enqueue_script('jquery.min.js', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('transition.js', get_template_directory_uri() . '/assets/js/transition.js');
    wp_enqueue_script('dropdown.js', get_template_directory_uri() . '/assets/js/dropdown.js');
    wp_enqueue_script('collapse.js', get_template_directory_uri() . '/assets/js/collapse.js');
    wp_enqueue_script('tab.js', get_template_directory_uri() . '/assets/js/tab.js');
    wp_enqueue_script('owl.carousel.min.js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
    wp_enqueue_script('jquery.lavalamp.min.js', get_template_directory_uri() . '/assets/js/jquery.lavalamp.min.js');
    wp_enqueue_script('script.js', get_template_directory_uri() . '/assets/js/script.js');
    wp_enqueue_script('loadmore.js', get_template_directory_uri() . '/assets/js/loadmore.js');
}
add_action( 'wp_enqueue_scripts', 'qahana_scripts' );

/**
 * Navigation
 */
function qahana_theme_setup() {

    add_theme_support('menus');

    register_nav_menu('home', 'Home Page Navigation');
    register_nav_menu('global', 'Global Page Navigation');
    register_nav_menu('footer', 'Footer Navigation');
}
add_action('init', 'qahana_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

/*
 * Include Walker File
 */
require get_template_directory() . '/inc/walker.php';