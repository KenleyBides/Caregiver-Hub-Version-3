<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>

<main class="site-main">
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
</main>

<?php get_footer(); ?>