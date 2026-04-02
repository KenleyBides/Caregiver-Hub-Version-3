<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Section: Site header (nav, logo, search, auth) -->
<header class="site-header">
    <div class="site-header__inner">
        <!-- Section: Primary navigation -->
        <nav class="site-nav site-header__left" aria-label="Primary navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => false,
                'menu_class'     => 'site-nav__menu',
            ));
            ?>
        </nav>

        <!-- Section: Logo or site title -->
        <div class="site-logo-mark">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Home">
                    <?php bloginfo('name'); ?>
                </a>
            <?php endif; ?>
        </div>

        <!-- Section: Search and account links -->
        <div class="site-header__right">
            <form class="site-search" method="get" action="<?php echo esc_url(home_url('/')); ?>" role="search" aria-label="<?php esc_attr_e('Search site', 'caregiverhub'); ?>">
                <label class="screen-reader-text" for="site-header-search"><?php esc_html_e('Search', 'caregiverhub'); ?></label>
                <div class="site-search__field">
                    <input
                        id="site-header-search"
                        class="site-search__input"
                        type="search"
                        name="s"
                        placeholder="<?php esc_attr_e('Search…', 'caregiverhub'); ?>"
                        value="<?php echo esc_attr(get_search_query()); ?>"
                        autocomplete="off"
                        inputmode="search"
                    >
                    <button class="site-search__submit" type="submit" aria-label="<?php esc_attr_e('Submit search', 'caregiverhub'); ?>">
                        <svg class="site-search__icon" width="18" height="18" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                        </svg>
                    </button>
                </div>
            </form>
            
            <div class="site-auth-links">
                <?php if (is_user_logged_in()) : ?>
                    <a class="auth-link auth-link--secondary" href="<?php echo esc_url(caregiverhub_get_page_url('chat')); ?>">Chat</a>
                    <a class="auth-link auth-link--primary" href="<?php echo esc_url(wp_logout_url(home_url('/'))); ?>">Log out</a>
                <?php else : ?>
                    <a class="auth-link auth-link--secondary" href="<?php echo esc_url(caregiverhub_get_page_url('sign-in')); ?>">Sign in</a>
                    <a class="auth-link auth-link--primary" href="<?php echo esc_url(caregiverhub_get_page_url('sign-up')); ?>">Sign up</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>