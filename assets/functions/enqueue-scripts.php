<?php
function joints_scripts_and_styles()
{
    global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    if (!is_admin()) {
        $theme_version = wp_get_theme()->Version;

        // Removes WP version of jQuery
        wp_deregister_script('jquery');

        // Loads jQuery from vendor Files
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/vendor/jquery/dist/jquery.min.js', array(), '2.1.4', true);

        // Modernizr from vendor Files
        // wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/vendor/foundation/js/vendor/modernizr.js', array(), '2.8.3', true );

        // Adding Foundation scripts file in the footer
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '3.3.5', true);

        // Adding scripts file in the footer
        wp_enqueue_script('site', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true);

        // Normalize from vendor files
        // wp_enqueue_style('normalize-css', get_template_directory_uri() . '/assets/vendor/foundation/css/normalize.min.css', array(), '', 'all');

        // Adding Foundation styles
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/dist/css/bootstrap.min.css', array(), '3.3.5', 'all');
        wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/assets/vendor/bootstrap/dist/css/bootstrap-theme.min.css', array(), '3.3.5', 'all');

        // Register main stylesheet
        wp_enqueue_style('site', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

        // Comment reply script for threaded comments
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }

        // Disable emoji
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('admin_print_styles', 'print_emoji_styles');
    }
}

add_action('wp_enqueue_scripts', 'joints_scripts_and_styles', 999);
?>