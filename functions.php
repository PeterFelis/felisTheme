<?php

function initLaden()
{
    wp_register_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrapcss');

    wp_register_style('eigen', get_template_directory_uri() . '/css/eigen.css', array(), false, 'all');
    wp_enqueue_style('eigen');

    wp_register_script('bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapJS');
}

add_action('wp_enqueue_scripts', 'initLaden');


// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');



//menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile menu location',
        'footer-menu' => 'Footer menu location'
    )
);

//widgets
function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page_sidebar',
            'before_title' => '<h4 class="widget_title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog_sidebar',
            'before_title' => '<h4 class="widget_title">',
            'after_title' => '</h4>'
        )
    );
};
add_action('widgets_init', 'my_sidebars');


//custom post types
function first_type()
{
    $args = array(
        'labels' => array(
            'name' => 'cars',
            'singular_name' => 'car'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );


    register_post_type('cars', $args);
}
add_action('init', 'first_type');
