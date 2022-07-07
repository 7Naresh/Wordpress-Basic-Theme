<?php

if (!function_exists('my_basic_theme')) :
    function my_basic_theme()
    {

        function add_theme_scripts()
        {
            wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assests/css/bootstrap.min.css', array(), false, 'all');
            wp_enqueue_style('main', get_template_directory_uri() . '/assests/css/main.css', array(), false, 'all');
            wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assests/js/bootstrap.min.js', array('jquery'), false, true);

            if (is_singular() && comments_open() && get_option('thread_comments')) {
                wp_enqueue_script('comment-reply');
            }
        }
        add_action('wp_enqueue_scripts', 'add_theme_scripts');

        function register_menus()
        {
            register_nav_menus(
                array(
                    'primary_menu' => __('Primary Menu', 'BasicTheme'),
                    'footer_menu' => __('Footer Menu', 'BasicTheme')
                )
            );
        }
        add_action('init', 'register_menus');

        $custom_logo = array(
            'width' => 80,
            'height' => 80,
            'flex-width' => true,
            'flex-height' => true,
            'header-text' => array('site-title', 'site-description'),
            'unlink-homepage-logo' => false
        );

        function custom_sidebar()
        {
            register_sidebar(
                array(
                    'id' => 'primary',
                    'name' => __('Primary Sidebar'),
                    'description' => __('A short description of the sidebar'),
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
                )
            );
        }
        add_action('widgets_init', 'custom_sidebar');

        function create_custom_post_type()
        {
            $args = array(
                'labels' => array(
                    'name' => __('Headphones', 'textdomain'),
                    'singular_name' => __('Headphone', 'textdomain')
                ),
                // 'hierachical' => false, // true pages/ false post type
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-format-audio',
                'supports' => array('title', 'editor', 'thumbnail'),
                // 'rewrite' => array('slug' => 'my-team-members') // custom slug
            );
            register_post_type('headphones', $args);
        }
        add_action('init', 'create_custom_post_type');

        function create_custom_taxonomy()
        {
            $args = array(
                'labels' => array(
                    'name' => __('Colours Category', 'textdomain'),
                    'singular_name' => __('Colour', 'textdomain')
                ),
                'hierachical' => false,
                'public' => true
            );
            register_taxonomy('colours', array('headphones'), $args);
        }
        add_action('init', 'create_custom_taxonomy');

        add_theme_support('menus');
        add_theme_support('custom-logo', $custom_logo);
        add_theme_support('post-formats', array('aside', 'gallery'));
        add_theme_support('widgets');
        add_theme_support('post-thumbnails');
    }
endif;
add_action('after_setup_theme', 'my_basic_theme');
