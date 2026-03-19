<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="site-main site-main--home">
    <section class="home-section home-carousel" aria-label="Featured media">
        <h1 class="home-carousel__title">
            <span class="home-carousel__title-accent">Welcome to</span>
            <span class="home-carousel__title-main">Empower Simcoe!</span>
        </h1>
        <p class="home-carousel__subtitle">Empowering people to lead a meaningful and inclusive life.</p>
        <div class="media-carousel" data-carousel>
            <div class="media-carousel__track">
                <article class="media-slide"></article>
                <article class="media-slide is-active"></article>
                <article class="media-slide"></article>
                <article class="media-slide"></article>
                <button class="media-carousel__play" type="button" aria-label="Play media">▶</button>
            </div>
            <div class="media-carousel__dots" aria-hidden="true">
                <span class="media-carousel__dot"></span>
                <span class="media-carousel__dot is-active"></span>
                <span class="media-carousel__dot"></span>
                <span class="media-carousel__dot"></span>
            </div>
        </div>
        <a class="home-carousel__cta" href="#">Get Started</a>
    </section>

    <section class="home-section home-news" aria-label="Latest news">
        <div class="news-grid">
            <a class="news-card" href="#">
                <span class="news-card__icon" aria-hidden="true">◒</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span class="news-card__cta">Learn more</span>
            </a>
            <a class="news-card" href="#">
                <span class="news-card__icon" aria-hidden="true">◒</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span class="news-card__cta">Learn more</span>
            </a>
            <a class="news-card" href="#">
                <span class="news-card__icon" aria-hidden="true">◒</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span class="news-card__cta">Learn more</span>
            </a>
            <a class="news-card" href="#">
                <span class="news-card__icon" aria-hidden="true">◒</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span class="news-card__cta">Learn more</span>
            </a>
            <a class="news-card" href="#">
                <span class="news-card__icon" aria-hidden="true">◒</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span class="news-card__cta">Learn more</span>
            </a>
            <a class="news-card" href="#">
                <span class="news-card__icon" aria-hidden="true">◒</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span class="news-card__cta">Learn more</span>
            </a>
        </div>
    </section>

    <section class="home-section home-explore" aria-label="Explore services">
        <h2 class="home-section__title">Explore</h2>
        <div class="explore-grid">
            <a class="explore-card explore-card--navy" href="https://www.empowersimcoe.ca/"><h3>Empower Simcoe</h3><p>Discover caregiver tools and resources.</p></a>
            <a class="explore-card explore-card--teal" href="https://marketplace.empowersimcoe.ca/"><h3>Marketplace</h3><p>Find available programs in your area.</p></a>
            <a class="explore-card explore-card--green" href="https://empowersimcoe.prevueaps.ca/jobs/"><h3>Careers</h3><p>Connect with local support networks.</p></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>