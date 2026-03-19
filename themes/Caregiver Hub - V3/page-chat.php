<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="site-main">
    <h1><?php the_title(); ?></h1>

    <?php if (!is_user_logged_in()) : ?>
        <p>You must be signed in to view this page.</p>
        <p><a href="<?php echo esc_url(caregiverhub_get_page_url('sign-in')); ?>">Sign in</a></p>
    <?php else : ?>
        <p>Welcome to the chat page.</p>
        <p>The actual chat feature will be added after the basic site is complete.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>