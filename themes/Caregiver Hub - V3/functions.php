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
            'marketplace' => '/#home-explore',
            'careers'     => '/#home-explore',

            // Other pages
            'about'       => '/about/',
            'help'        => '/contact/',
            'contact'        => '/contact/',
            'services'     => '/services/',
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

/**
 * After a failed login from the theme sign-in form, return to the sign-in page with a message.
 */
function caregiverhub_login_failed_redirect_to_sign_in() {
    if (empty($_SERVER['HTTP_REFERER'])) {
        return;
    }

    $sign_in = caregiverhub_get_page_url('sign-in');
    if (!$sign_in) {
        return;
    }

    $referer = isset($_SERVER['HTTP_REFERER']) ? wp_unslash($_SERVER['HTTP_REFERER']) : '';
    if ($referer === '' || stripos($referer, $sign_in) === false) {
        return;
    }

    wp_safe_redirect(add_query_arg('login', 'failed', $sign_in));
    exit;
}
add_action('wp_login_failed', 'caregiverhub_login_failed_redirect_to_sign_in');

/**
 * JSON-LD for the Services page (SEO).
 */
function caregiverhub_services_page_jsonld() {
    if (!is_page('services')) {
        return;
    }

    $page_id = get_queried_object_id();
    if (!$page_id) {
        return;
    }

    $data = array(
        '@context' => 'https://schema.org',
        '@type'    => 'WebPage',
        '@id'      => get_permalink($page_id) . '#webpage',
        'url'      => get_permalink($page_id),
        'name'     => get_the_title($page_id),
        'description' => __('Practical support for caregivers: education, tools, and connection through the Caregiver Hub.', 'caregiverhub'),
        'isPartOf' => array(
            '@type' => 'WebSite',
            'url'   => home_url('/'),
            'name'  => get_bloginfo('name'),
        ),
    );

    echo '<script type="application/ld+json">' . wp_json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'caregiverhub_services_page_jsonld', 20);

/**
 * JSON-LD for the About page (SEO).
 */
function caregiverhub_about_page_jsonld() {
    if (!is_page('about')) {
        return;
    }

    $page_id = get_queried_object_id();
    if (!$page_id) {
        return;
    }

    $data = array(
        '@context'    => 'https://schema.org',
        '@type'       => 'AboutPage',
        '@id'         => get_permalink($page_id) . '#webpage',
        'url'         => get_permalink($page_id),
        'name'        => get_the_title($page_id),
        'description' => __('The Caregiver Hub supports caregivers with information, tools, and community connection.', 'caregiverhub'),
        'isPartOf'    => array(
            '@type' => 'WebSite',
            'url'   => home_url('/'),
            'name'  => get_bloginfo('name'),
        ),
    );

    echo '<script type="application/ld+json">' . wp_json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'caregiverhub_about_page_jsonld', 20);

/**
 * Style WP login/register pages with brand design.
 */
function caregiverhub_style_login_pages() {
    $is_register = isset($_GET['action']) && 'register' === $_GET['action'];
    ?>
    <style>
        body.login {
            background: linear-gradient(145deg, #f4f8ff 0%, #ffffff 45%, #e9fffc 100%);
            font-family: Arial, sans-serif;
        }

        body.login div#login {
            width: min(420px, 92vw);
            padding-top: 5vh;
        }

        body.login h1 a {
            background-image: none;
            width: auto;
            height: auto;
            text-indent: 0;
            overflow: visible;
            color: #001e60;
            font-size: 2rem;
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: 0.01em;
            margin-bottom: 18px;
            text-align: center;
        }

        body.login form {
            border: 1px solid #d9e5f4;
            border-radius: 16px;
            box-shadow: 0 14px 30px rgba(0, 30, 96, 0.08);
            padding: 24px 22px 22px;
            background: #fff;
        }

        body.login label {
            color: #001e60;
            font-weight: 700;
        }

        body.login .input,
        body.login input[type="text"] {
            border: 1px solid #cdddef;
            border-radius: 10px;
            box-shadow: none;
            padding: 10px 12px;
            font-size: 0.95rem;
        }

        body.login .input:focus,
        body.login input[type="text"]:focus {
            border-color: #00bfb3;
            box-shadow: 0 0 0 3px rgba(0, 191, 179, 0.2);
        }

        body.login .button-primary {
            background: #001e60;
            border-color: #001e60;
            border-radius: 10px;
            font-weight: 700;
            padding: 0 16px;
            text-shadow: none;
            box-shadow: none;
        }

        body.login .button-primary:hover,
        body.login .button-primary:focus {
            background: #00bfb3;
            border-color: #00bfb3;
        }

        body.login #nav a,
        body.login #backtoblog a {
            color: #001e60;
            font-weight: 600;
        }

        body.login #nav a:hover,
        body.login #backtoblog a:hover {
            color: #00bfb3;
        }

        body.login-action-register .message {
            border-left: 4px solid #00bfb3;
            border-radius: 10px;
            background: #f3fffd;
            box-shadow: none;
        }

        <?php if ($is_register) : ?>
        body.login h1 a::after {
            content: "Create your account";
            display: block;
            color: #00bfb3;
            font-size: 0.95rem;
            font-weight: 600;
            margin-top: 6px;
            letter-spacing: 0.02em;
        }
        <?php endif; ?>
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'caregiverhub_style_login_pages');

/**
 * Link login logo/title to home.
 */
function caregiverhub_login_logo_url() {
    return home_url('/');
}
add_filter('login_headerurl', 'caregiverhub_login_logo_url');

function caregiverhub_login_logo_title() {
    return get_bloginfo('name');
}
add_filter('login_headertext', 'caregiverhub_login_logo_title');