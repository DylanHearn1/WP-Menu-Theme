<?php

add_theme_support( 'post-thumbnails' ); 

    function the_menus() {
        $locations = array(
            'top-nav' => "Navigation on the top of page",
            'front-page-nav' => "front page navigation",
            'front-page-button' => "front page menu navigation"
        );

        register_nav_menus($locations);
    }

    add_action('init', 'the_menus');

    function custom_enqueue_styles() {
        wp_enqueue_style('bootstrap-style-link', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
        wp_enqueue_style('custom-css', get_template_directory_uri() . "./style.css");
        wp_enqueue_style('montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    };

    add_action('wp_enqueue_scripts', 'custom_enqueue_styles');

    function custom_enqueue_scripts() {
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' );
    }

    add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');


    function register_meal_post_type() {
        $args = array(
            'public' => true,
            'label' => 'meal',
            'supports' => array('title', 'editor', 'thumbnail'),
        );
        register_post_type('meal', $args);
    }

    add_action('init', 'register_meal_post_type');

    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');

?>