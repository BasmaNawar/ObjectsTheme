<?php

// Include Navwalker for Bootstrap Navigation Menu

require_once('wp-bootstrap-navwalker.php');

// Add Featured Thumbnail Support

add_theme_support('post-thumbnails');

// Add Menu Support

add_theme_support('menus');

// Add Header image

add_theme_support( 'custom-header' );


/*
Functions to Add Custom Styles
wp_enqueue_style()
*/

function load_stylesheets() {

wp_register_style('bootstrap-css' , get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

wp_enqueue_style('bootstrap-css');

wp_register_style('owldocs-css' , get_template_directory_uri() . '/css/docs.theme.min.css', array(), false, 'all');
 
wp_enqueue_style('owldocs-css');

wp_register_style('slider-css' , get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
 
wp_enqueue_style('slider-css');

wp_register_style('DefaultSlider-css' , get_template_directory_uri() . '/css/owl.theme.default.css', array(), false, 'all');
 
wp_enqueue_style('DefaultSlider-css');

wp_register_style('style' , get_template_directory_uri() . '/style.css', array(), false, 'all');
 
wp_enqueue_style('style');

}


add_action( 'wp_enqueue_scripts', 'load_stylesheets' );

/*
Functions to Add Custom Scripts & Jquery
wp_enqueue_script()
*/

function include_jquery() {

wp_deregister_script('jquery');

wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', 1, 'true');

add_action( 'wp_enqueue_scripts', 'jquery' );  

}

add_action( 'wp_enqueue_scripts', 'include_jquery' );



function load_js() {

wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, 'true');

wp_enqueue_script('bootstrap-js');


wp_register_script('fontawesome-js', get_template_directory_uri() . '/js/a076d05399.js', '', 1, 'true');

wp_enqueue_script('fontawesome-js');

wp_register_script('custom-js', get_template_directory_uri() . '/js/scripts.js', '', 1, 'true');

wp_enqueue_script('custom-js');

wp_register_script('slider-js', get_template_directory_uri() . '/js/owl.carousel.min.js', '', 1, 'true');

wp_enqueue_script('slider-js');

// Enqueue IE-specific Scripts with conditional comments

wp_enqueue_script( 'wp-respond', get_template_directory_uri().'/js/respond.min.js' );
wp_script_add_data( 'wp-respond', 'conditional', 'lt IE 9' );

wp_enqueue_script( 'wp-html5shiv',get_template_directory_uri().'/js/html5shiv.js');
wp_script_add_data( 'wp-html5shiv', 'conditional', 'lt IE 9' );


}

add_action( 'wp_enqueue_scripts', 'load_js' );

/*  Add Navbar Menu  */

function add_custom_menu(){

register_nav_menus (

array (

    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme')

)

);
}


function bootstrap_menu(){

wp_nav_menu (

    array (
    
    'theme_location' => 'top-menu',
    'menu_class'     => 'navbar-nav m-auto menu-nav',
    'container'      => false,
    'depth'          => 2,
    'walker'         => new wp_bootstrap_navwalker()
    
    )
);
}
function footer_menu(){

    wp_nav_menu (
    
        array (
        
        'theme_location' => 'footer-menu',  
        'menu_class'     => 'navbar-nav mr-auto footer-nav',
        'container'      => false,
        'depth'          => 2,
        'walker'         => new wp_bootstrap_navwalker()
        )
    );
    }


function extend_excerpt_length($length) {

    return 15;

}

add_filter('excerpt_length','extend_excerpt_length');

function excerpt_change_dots($more) {

    return ' ...';

}

add_filter('excerpt_more','excerpt_change_dots');

add_action('init', 'add_custom_menu');

 
add_image_size('smallest', 300, 300, true);

add_image_size('largest', 800, 800, true);



