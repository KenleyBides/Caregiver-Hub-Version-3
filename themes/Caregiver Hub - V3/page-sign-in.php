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
        <p><a href="<?php echo esc_url(caregiverhub_get_page_url('chat')); ?>">Go to Chat</a></p>
    <?php else : ?>
        <?php
        wp_login_form(array(
            'redirect' => caregiverhub_get_page_url('chat'),
            'label_username' => 'Email or Username',
            'label_password' => 'Password',
            'label_log_in'   => 'Sign In',
            'remember'       => true,
        ));
        ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>