<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();

$sign_in_url   = caregiverhub_get_page_url('sign-in');
$redirect_to   = caregiverhub_get_page_url('chat');
$sign_up_url   = caregiverhub_get_page_url('sign-up');
$lost_pass_url = wp_lostpassword_url($sign_in_url);
?>

<main class="site-main site-main--sign-in">
    <div class="sign-in-page">
        <!-- Section: Decorative background -->
        <div class="sign-in-page__decor" aria-hidden="true">
            <span class="sign-in-page__shape sign-in-page__shape--1"></span>
            <span class="sign-in-page__shape sign-in-page__shape--2"></span>
            <span class="sign-in-page__shape sign-in-page__shape--3"></span>
            <span class="sign-in-page__icon sign-in-page__icon--a"></span>
            <span class="sign-in-page__icon sign-in-page__icon--b"></span>
        </div>

        <!-- Section: Sign-in card (logged-in message or login form) -->
        <div class="sign-in-card">
            <?php if (is_user_logged_in()) : ?>
                <h1 class="sign-in-card__title"><?php esc_html_e('You’re signed in', 'caregiverhub'); ?></h1>
                <p class="sign-in-card__lead"><?php esc_html_e('You can continue to Chat or return home.', 'caregiverhub'); ?></p>
                <div class="sign-in-card__actions sign-in-card__actions--stack">
                    <a class="sign-in-btn sign-in-btn--primary" href="<?php echo esc_url(caregiverhub_get_page_url('chat')); ?>"><?php esc_html_e('Go to Chat', 'caregiverhub'); ?></a>
                    <a class="sign-in-link-muted" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'caregiverhub'); ?></a>
                </div>
            <?php else : ?>
                <!-- Subsection: Welcome, notices, and login form -->
                <h1 class="sign-in-card__title"><?php esc_html_e('Welcome back', 'caregiverhub'); ?></h1>

                <?php
                $login_err = isset($_GET['login']) ? sanitize_text_field(wp_unslash($_GET['login'])) : '';
                if ('failed' === $login_err) :
                    ?>
                    <p class="sign-in-card__notice sign-in-card__notice--error" role="alert"><?php esc_html_e('That email or password doesn’t match our records. Please try again.', 'caregiverhub'); ?></p>
                <?php elseif ('empty' === $login_err) : ?>
                    <p class="sign-in-card__notice sign-in-card__notice--error" role="alert"><?php esc_html_e('Please enter your email and password.', 'caregiverhub'); ?></p>
                <?php endif; ?>

                <?php if (isset($_GET['loggedout']) && 'true' === $_GET['loggedout']) : ?>
                    <p class="sign-in-card__notice sign-in-card__notice--success"><?php esc_html_e('You have been logged out.', 'caregiverhub'); ?></p>
                <?php endif; ?>

                <form class="sign-in-form" name="loginform" id="loginform" action="<?php echo esc_url(site_url('wp-login.php', 'login_post')); ?>" method="post">
                    <input type="hidden" name="redirect_to" value="<?php echo esc_attr($redirect_to); ?>">
                    <input type="hidden" name="testcookie" value="1">

                    <div class="sign-in-field">
                        <label class="sign-in-label" for="user_login"><?php esc_html_e('Email', 'caregiverhub'); ?></label>
                        <div class="sign-in-input-wrap">
                            <span class="sign-in-input__icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                    <path d="M4 6h16v12H4V6zm2 2v8h12V8H6zm1 1.5h10l-5 3-5-3z" fill="currentColor"/>
                                </svg>
                            </span>
                            <input class="sign-in-input" type="text" name="log" id="user_login" autocomplete="username" placeholder="<?php esc_attr_e('Enter your email', 'caregiverhub'); ?>" required>
                        </div>
                    </div>

                    <div class="sign-in-field">
                        <label class="sign-in-label" for="user_pass"><?php esc_html_e('Password', 'caregiverhub'); ?></label>
                        <div class="sign-in-input-wrap">
                            <span class="sign-in-input__icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                    <path d="M12 2a4 4 0 014 4v2h2v14H6V8h2V6a4 4 0 014-4zm0 2a2 2 0 00-2 2v2h4V6a2 2 0 00-2-2zm-4 6v10h8V10H8z" fill="currentColor"/>
                                </svg>
                            </span>
                            <input class="sign-in-input sign-in-input--password" type="password" name="pwd" id="user_pass" autocomplete="current-password" placeholder="<?php esc_attr_e('Enter your password', 'caregiverhub'); ?>" required>
                            <button
                                type="button"
                                class="sign-in-toggle-pw"
                                id="sign-in-toggle-pw"
                                aria-label="<?php esc_attr_e('Show password', 'caregiverhub'); ?>"
                                aria-pressed="false"
                                data-label-show="<?php esc_attr_e('Show password', 'caregiverhub'); ?>"
                                data-label-hide="<?php esc_attr_e('Hide password', 'caregiverhub'); ?>"
                            >
                                <span class="sign-in-toggle-pw__icon sign-in-toggle-pw__icon--slash" aria-hidden="true">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6c3.79 0 7.17 2.13 9 5.5-1.83 3.37-5.21 5.5-9 5.5S4.83 14.87 3 11.5C4.83 8.13 8.21 6 12 6zm0 2C9.79 8 7.67 9.11 6.27 11.5 7.67 13.89 9.79 15 12 15s4.33-1.11 5.73-3.5C16.33 9.11 14.21 8 12 8zm0 2.5a2 2 0 110 4 2 2 0 010-4z" fill="currentColor"/>
                                        <path d="M4 3l16 16-1.5 1.5L2.5 4.5 4 3z" fill="currentColor"/>
                                    </svg>
                                </span>
                                <span class="sign-in-toggle-pw__icon sign-in-toggle-pw__icon--open" aria-hidden="true">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6c3.79 0 7.17 2.13 9 5.5-1.83 3.37-5.21 5.5-9 5.5S4.83 14.87 3 11.5C4.83 8.13 8.21 6 12 6zm0 2C9.79 8 7.67 9.11 6.27 11.5 7.67 13.89 9.79 15 12 15s4.33-1.11 5.73-3.5C16.33 9.11 14.21 8 12 8zm0 2.5a2 2 0 110 4 2 2 0 010-4z" fill="currentColor"/>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="sign-in-row">
                        <label class="sign-in-remember">
                            <input type="checkbox" name="rememberme" id="rememberme" value="forever">
                            <span><?php esc_html_e('Keep me logged in', 'caregiverhub'); ?></span>
                        </label>
                        <a class="sign-in-forgot" href="<?php echo esc_url($lost_pass_url); ?>"><?php esc_html_e('Forgot password?', 'caregiverhub'); ?></a>
                    </div>

                    <button type="submit" name="wp-submit" id="wp-submit" class="sign-in-btn sign-in-btn--primary sign-in-btn--block"><?php esc_html_e('Sign in', 'caregiverhub'); ?></button>
                </form>

                <p class="sign-in-register">
                    <?php esc_html_e('Not a member yet?', 'caregiverhub'); ?>
                    <?php if ($sign_up_url) : ?>
                        <a href="<?php echo esc_url($sign_up_url); ?>"><?php esc_html_e('Register now', 'caregiverhub'); ?></a>
                    <?php else : ?>
                        <a href="<?php echo esc_url(wp_registration_url()); ?>"><?php esc_html_e('Register now', 'caregiverhub'); ?></a>
                    <?php endif; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
