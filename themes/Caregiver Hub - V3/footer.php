<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<footer class="site-footer">
    <div class="site-footer__inner">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>