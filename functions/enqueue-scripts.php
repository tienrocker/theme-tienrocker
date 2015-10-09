<?php

function scripts_and_styles() {
    global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    if (!is_admin()) {
        $theme_version = wp_get_theme()->Version;

        wp_deregister_script('jquery'); // Removes WP version of jQuery

        /**
         * IE Fallbacks in the header
         */
        // wp_enqueue_script('ie_html5shiv', get_template_directory_uri() . '/assets/vendor/html5shiv/dist/html5shiv.min.js', array(), '3.7.3', false);
        // wp_script_add_data('ie_html5shiv', 'conditional', 'lt IE 9');
        // wp_enqueue_script('ie_respond', get_template_directory_uri() . '/assets/vendor/respond/dest/respond.min.js', array(), '1.4.2', false);
        // wp_script_add_data('ie_respond', 'conditional', 'lt IE 9');
        // Loads jQuery from vendor Files in the footer
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery/jquery.min.js', array(), '2.1.4', false);

        // Adding scripts file in the footer
        // wp_enqueue_script('site', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '0.1', true);
        // Adding styles
        wp_enqueue_style('fortawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.4.0', 'all');
        wp_enqueue_style('site', get_template_directory_uri() . '/assets/css/site.min.css', array(), '0.1', 'screen');
        wp_enqueue_style('site-print', get_template_directory_uri() . '/assets/css/print.min.css', array(), '0.1', 'print');

        // Disable emoji
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('admin_print_styles', 'print_emoji_styles');
    }
}

add_action('wp_enqueue_scripts', 'scripts_and_styles', 999);

