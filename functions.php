<?php

function custom_theme_support()
{
    add_theme_support(
        'page-templates',
        array(
            'about.php' => 'about-us',
        )
    );
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'custom_theme_support');


function the_menus()
{
    $locations = array(
        'top-nav' => "Navigation on the top of page",
        'footer-nav' => "Navigation Footer (bottom)"
    );

    register_nav_menus($locations);
}

add_action('init', 'the_menus');

function custom_enqueue_styles()
{
    wp_enqueue_style('bootstrap-style-link', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('custom-css', get_template_directory_uri() . "/styles/style.css");
    wp_enqueue_style('montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_style('fa-icons', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css');
}


add_action('wp_enqueue_scripts', 'custom_enqueue_styles');

function custom_enqueue_scripts()
{
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . "/js/main.js");
}

add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');


function register_custom_post_type()
{
    $meal_args = array(
        'public' => true,
        'label' => 'Meals',
        'supports' => array('title', 'editor', 'thumbnail'),
    );
    register_post_type('meal', $meal_args);

    $about_args = array(
        'public' => true,
        'label' => 'About Us',
        'supports' => array('title', 'editor')
    );
    register_post_type('about', $about_args);
}

add_action('init', 'register_custom_post_type');

function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function enable_excerpts()
{
    add_post_type_support('meal', 'excerpt');
}

add_action('init', 'enable_excerpts')

    ?>