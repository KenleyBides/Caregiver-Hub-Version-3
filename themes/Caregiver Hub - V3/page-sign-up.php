<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="site-main">
    <h1><?php the_title(); ?></h1>

    <?php if (is_user_logged_in()) : ?>
        <p>You are already signed in.</p>
    <?php else : ?>
        <p>
            <a href="<?php echo esc_url(wp_registration_url()); ?>">
                Create an account
            </a>
        </p>
        <p>After registering, you can sign in and access the Chat page.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>