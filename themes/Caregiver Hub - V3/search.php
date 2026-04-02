<?php get_header(); ?>

<main class="search-results-page">
    <div class="container">
        <!-- Section: Search query heading -->
        <h1>Search Results for "<?php echo esc_html(get_search_query()); ?>"</h1>

        <!-- Section: Results list or empty state -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="search-result-item">
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <p><?php echo esc_html(get_post_type()); ?></p>

                    <div>
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No results found.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>