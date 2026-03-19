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
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
            <?php bloginfo('name'); ?>
        </a>

        <nav class="site-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
        </nav>

        <div class="site-auth-links">
            <?php if (is_user_logged_in()) : ?>
                <a href="<?php echo esc_url(caregiverhub_get_page_url('chat')); ?>">Chat</a>
                <a href="<?php echo esc_url(wp_logout_url(home_url('/'))); ?>">Log out</a>
            <?php else : ?>
                <a href="<?php echo esc_url(caregiverhub_get_page_url('sign-in')); ?>">Sign in</a>
                <a href="<?php echo esc_url(caregiverhub_get_page_url('sign-up')); ?>">Sign up</a>
            <?php endif; ?>
        </div>
    </div>
</header>