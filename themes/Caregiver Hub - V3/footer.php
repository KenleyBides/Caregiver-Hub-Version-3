<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- Section: Site footer -->
<footer class="site-footer">
    <div class="site-footer__inner">
        <!-- Section: Brand and privacy link -->
        <div class="site-footer__left">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-footer__brand" aria-label="Home">
                Caregiver Hub
            </a>
            <a href="<?php echo esc_url(get_privacy_policy_url() ? get_privacy_policy_url() : caregiverhub_get_page_url('privacy-policy')); ?>" class="site-footer__privacy">
                Privacy Policy
            </a>
        </div>

        <!-- Section: Email subscribe (placeholder) -->
        <form class="site-footer__subscribe" action="#" method="post">
            <label class="screen-reader-text" for="footer-email">Email</label>
            <input id="footer-email" type="email" name="footer-email" placeholder="Enter your email">
            <button type="submit">Subscribe</button>
        </form>

        <!-- Section: Social links -->
        <div class="site-footer__social" aria-label="Social links">
            <a href="#" aria-label="Facebook">f</a>
            <a href="#" aria-label="LinkedIn">in</a>
            <a href="#" aria-label="YouTube">▶</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>