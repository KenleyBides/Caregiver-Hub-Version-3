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

<header class="site-header">
    <div class="site-header__inner">
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

        <div class="site-logo-mark">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Home">
                    <?php bloginfo('name'); ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="site-header__right">
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