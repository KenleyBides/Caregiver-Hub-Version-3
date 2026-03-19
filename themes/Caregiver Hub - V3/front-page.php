<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="site-main">
    <section class="home-section home-carousel" aria-label="Featured media">
        <h1 class="home-section__title">Featured Media</h1>
        <div class="media-carousel" data-carousel>
            <div class="media-carousel__track">
                <article class="media-slide is-active">
                    <h2>Media Placeholder 1</h2>
                    <p>Video or image content goes here.</p>
                </article>
                <article class="media-slide">
                    <h2>Media Placeholder 2</h2>
                    <p>Video or image content goes here.</p>
                </article>
                <article class="media-slide">
                    <h2>Media Placeholder 3</h2>
                    <p>Video or image content goes here.</p>
                </article>
                <article class="media-slide">
                    <h2>Media Placeholder 4</h2>
                    <p>Video or image content goes here.</p>
                </article>
            </div>
            <div class="media-carousel__dots" aria-hidden="true">
                <span class="media-carousel__dot is-active"></span>
                <span class="media-carousel__dot"></span>
                <span class="media-carousel__dot"></span>
                <span class="media-carousel__dot"></span>
            </div>
        </div>
    </section>

    <section class="home-section home-news" aria-label="Latest news">
        <h2 class="home-section__title">News</h2>
        <div class="news-grid">
            <a class="news-card" href="#"><h3>News Placeholder 1</h3><p>Click to read more about this update.</p></a>
            <a class="news-card" href="#"><h3>News Placeholder 2</h3><p>Click to read more about this update.</p></a>
            <a class="news-card" href="#"><h3>News Placeholder 3</h3><p>Click to read more about this update.</p></a>
            <a class="news-card" href="#"><h3>News Placeholder 4</h3><p>Click to read more about this update.</p></a>
            <a class="news-card" href="#"><h3>News Placeholder 5</h3><p>Click to read more about this update.</p></a>
            <a class="news-card" href="#"><h3>News Placeholder 6</h3><p>Click to read more about this update.</p></a>
        </div>
    </section>

    <section class="home-section home-explore" aria-label="Explore services">
        <h2 class="home-section__title">Explore</h2>
        <div class="explore-grid">
            <a class="explore-card explore-card--navy" href="#"><h3>Explore Support</h3><p>Discover caregiver tools and resources.</p></a>
            <a class="explore-card explore-card--teal" href="#"><h3>Explore Programs</h3><p>Find available programs in your area.</p></a>
            <a class="explore-card explore-card--green" href="#"><h3>Explore Community</h3><p>Connect with local support networks.</p></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>