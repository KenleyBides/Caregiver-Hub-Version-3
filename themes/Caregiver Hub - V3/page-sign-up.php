<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();

$sign_in_url = caregiverhub_get_page_url('sign-in');
$reg_url     = wp_registration_url($sign_in_url ? $sign_in_url : '');
$contact_url = caregiverhub_get_page_url('contact');
$can_register = get_option('users_can_register');
?>

<main class="site-main site-main--sign-in site-main--sign-up">
    <div class="sign-in-page">
        <!-- Section: Decorative background -->
        <div class="sign-in-page__decor" aria-hidden="true">
            <span class="sign-in-page__shape sign-in-page__shape--1"></span>
            <span class="sign-in-page__shape sign-in-page__shape--2"></span>
            <span class="sign-in-page__shape sign-in-page__shape--3"></span>
            <span class="sign-in-page__icon sign-in-page__icon--a"></span>
            <span class="sign-in-page__icon sign-in-page__icon--b"></span>
        </div>

        <!-- Section: Sign-up card (state: logged in, registration closed, or join CTA) -->
        <div class="sign-in-card sign-in-card--sign-up">
            <?php if (is_user_logged_in()) : ?>
                <h1 class="sign-in-card__title"><?php esc_html_e('You already have an account', 'caregiverhub'); ?></h1>
                <p class="sign-in-card__lead"><?php esc_html_e('You’re signed in. Head to Chat or explore the site.', 'caregiverhub'); ?></p>
                <div class="sign-in-card__actions sign-in-card__actions--stack">
                    <a class="sign-in-btn sign-in-btn--primary sign-in-btn--block sign-up-btn" href="<?php echo esc_url(caregiverhub_get_page_url('chat')); ?>"><?php esc_html_e('Go to Chat', 'caregiverhub'); ?></a>
                    <a class="sign-in-link-muted" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'caregiverhub'); ?></a>
                </div>
            <?php elseif (!$can_register) : ?>
                <h1 class="sign-in-card__title"><?php esc_html_e('Registration is closed', 'caregiverhub'); ?></h1>
                <p class="sign-in-card__lead"><?php esc_html_e('New accounts aren’t open right now. If you need access, please reach out and we’ll help.', 'caregiverhub'); ?></p>
                <div class="sign-up-cta">
                    <?php if ($contact_url) : ?>
                        <a class="sign-in-btn sign-in-btn--primary sign-in-btn--block sign-up-btn" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Contact us', 'caregiverhub'); ?></a>
                    <?php else : ?>
                        <a class="sign-in-btn sign-in-btn--primary sign-in-btn--block sign-up-btn" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Back to home', 'caregiverhub'); ?></a>
                    <?php endif; ?>
                    <?php if ($sign_in_url) : ?>
                        <p class="sign-up-signin">
                            <?php esc_html_e('Already have an account?', 'caregiverhub'); ?>
                            <a href="<?php echo esc_url($sign_in_url); ?>"><?php esc_html_e('Sign in', 'caregiverhub'); ?></a>
                        </p>
                    <?php endif; ?>
                </div>
            <?php else : ?>
                <p class="sign-up-eyebrow"><?php esc_html_e('Join the community', 'caregiverhub'); ?></p>
                <h1 class="sign-in-card__title sign-in-card__title--tight"><?php esc_html_e('Create your account', 'caregiverhub'); ?></h1>
                <p class="sign-up-lead"><?php esc_html_e('Connect with others, stay informed, and unlock member features, including Chat.', 'caregiverhub'); ?></p>

                <div class="sign-up-benefits-wrap">
                    <p class="sign-up-benefits-heading"><?php esc_html_e('What you’ll get', 'caregiverhub'); ?></p>
                    <ul class="sign-up-benefits" aria-label="<?php esc_attr_e('What you get', 'caregiverhub'); ?>">
                        <li class="sign-up-benefits__item">
                            <span class="sign-up-benefits__check" aria-hidden="true">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" fill="currentColor"/></svg>
                            </span>
                            <span><?php esc_html_e('Chat with peers in a supportive space', 'caregiverhub'); ?></span>
                        </li>
                        <li class="sign-up-benefits__item">
                            <span class="sign-up-benefits__check" aria-hidden="true">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" fill="currentColor"/></svg>
                            </span>
                            <span><?php esc_html_e('News and resources in one place', 'caregiverhub'); ?></span>
                        </li>
                        <li class="sign-up-benefits__item">
                            <span class="sign-up-benefits__check" aria-hidden="true">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" fill="currentColor"/></svg>
                            </span>
                            <span><?php esc_html_e('One secure login across the site', 'caregiverhub'); ?></span>
                        </li>
                    </ul>
                </div>

                <div class="sign-up-cta">
                    <a class="sign-in-btn sign-in-btn--primary sign-in-btn--block sign-up-btn" href="<?php echo esc_url($reg_url); ?>"><?php esc_html_e('Continue to registration', 'caregiverhub'); ?></a>
                    <p class="sign-up-note"><?php esc_html_e('Next, you’ll enter a username and email. We may send a confirmation email to finish setup.', 'caregiverhub'); ?></p>
                </div>

                <?php if ($sign_in_url) : ?>
                    <p class="sign-up-signin">
                        <?php esc_html_e('Already have an account?', 'caregiverhub'); ?>
                        <a href="<?php echo esc_url($sign_in_url); ?>"><?php esc_html_e('Sign in', 'caregiverhub'); ?></a>
                    </p>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
