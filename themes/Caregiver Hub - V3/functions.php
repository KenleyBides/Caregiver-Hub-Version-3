<?php
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup.
 */
function caregiverhub_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'caregiverhub'),
    ));
}
add_action('after_setup_theme', 'caregiverhub_setup');

/**
 * Enqueue assets.
 */
function caregiverhub_enqueue_assets() {
    wp_enqueue_style(
        'caregiverhub-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0'
    );

    wp_enqueue_script(
        'caregiverhub-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'caregiverhub_enqueue_assets');

/**
 * Helper: get page URL by slug.
 */
function caregiverhub_get_page_url($slug) {
    $page = get_page_by_path($slug);
    return $page ? get_permalink($page->ID) : home_url('/');
}

/**
 * Protect chat page from logged-out users.
 */
function caregiverhub_protect_chat_page() {
    if (is_page('chat') && !is_user_logged_in()) {
        wp_redirect(home_url('/sign-in/'));
        exit;
    }
}
add_action('template_redirect', 'caregiverhub_protect_chat_page');