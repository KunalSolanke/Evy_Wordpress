<?php

function load_stylesheets()
{
    // wp_register_style( 'bootstrap',
    // get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css',
    // array(), false, 'all');
    // wp_enqueue_style('bootstrap');

    wp_register_style( 'normalize',
    get_template_directory_uri() . '/css/normalize.css',
    array(), false, 'all');
    wp_enqueue_style('normalize');

    wp_register_style( 'webflow',
    get_template_directory_uri() . '/css/webflow.css',
    array(), false, 'all');
    wp_enqueue_style('webflow');

    wp_register_style( 'bhabani',
    get_template_directory_uri() . '/css/bhabanis-amazing-project.webflow.css',
    array(), false, 'all');
    wp_enqueue_style('bhabani');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function loadjs()
{
    // wp_register_script( 'bootstrap', 
    // get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', '', 1, true);
    // wp_enqueue_script('bootstrap');

    wp_register_script( 'jquery', 
    get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true);
    wp_enqueue_script('jquery');

    wp_register_script( 'webflow', 
    get_template_directory_uri() . '/js/webflow.js', '', 1, true);
    wp_enqueue_script('webflow');

    // Might need to add jquery

}
add_action('wp_enqueue_scripts', 'loadjs');


add_theme_support( 'menus' );

add_theme_support( 'post-thumbnails' );

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);
