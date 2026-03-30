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
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'caregiverhub'),
    ));
}
add_action('after_setup_theme', 'caregiverhub_setup');

/**
 * Search Function
 */
function caregiverhub_custom_search_redirect() {
    if (is_search() && !is_admin()) {
        $query = strtolower(trim(get_search_query()));

        $routes = array(
            // Home / hero
            'home'        => '/#home-hero',
            'welcome'     => '/#home-hero',
            'empower'     => '/#home-hero',
            'hero'        => '/#home-hero',
            'featured'    => '/#home-hero',

            // News section
            'news'        => '/#home-news',
            'updates'     => '/#home-news',
            'latest'      => '/#home-news',
            'articles'    => '/#home-news',

            // Explore section
            'explore'     => '/#home-explore',
            'services'    => '/#home-explore',
            'programs'    => '/#home-explore',
            'marketplace' => '/#home-explore',
            'careers'     => '/#home-explore',

            // Other pages
            'about'       => '/about/',
            'help'        => '/contact/',
            'support'     => '/contact/',
            'chat'        => '/chat/',
        );

        foreach ($routes as $keyword => $url) {
            if (strpos($query, $keyword) !== false) {
                wp_redirect(home_url($url));
                exit;
            }
        }
    }
}
add_action('template_redirect', 'caregiverhub_custom_search_redirect');


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
 * Remove specific links from the primary header menu.
 */
function caregiverhub_filter_primary_menu_items($items, $args) {
    if (!isset($args->theme_location) || 'primary' !== $args->theme_location) {
        return $items;
    }

    $blocked_titles = array('home', 'privacy policy', 'sign in', 'sign up', 'chat');
    $blocked_paths  = array('/', '/privacy-policy/', '/sign-in/', '/sign-up/', '/chat/');
    $filtered_items = array();

    foreach ($items as $item) {
        $title = strtolower(trim(wp_strip_all_tags($item->title)));
        $path  = wp_parse_url($item->url, PHP_URL_PATH);
        $path  = $path ? trailingslashit($path) : '/';

        if (in_array($title, $blocked_titles, true) || in_array($path, $blocked_paths, true)) {
            continue;
        }

        $filtered_items[] = $item;
    }

    return $filtered_items;
}
add_filter('wp_nav_menu_objects', 'caregiverhub_filter_primary_menu_items', 10, 2);

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