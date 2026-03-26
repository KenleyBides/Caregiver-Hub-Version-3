<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>

<main class="site-main site-main--services">
    <div class="about-layout about-layout--new">
        <!-- Services Section: Feature grid (6 service cards) -->
        <section class="about-new-section about-new-section--features about-services-section" aria-label="Services">
            <div class="about-new__container">
                <h2 class="about-new__title">What you can use every day</h2>
                <p class="about-new__subtitle">
                    A central place to learn, find resources, and get support built for caregivers.
                </p>

                <div class="about-feature-grid">
                    <article class="about-feature-card">
                        <span class="about-feature-card__icon" aria-hidden="true">24/7</span>
                        <h3 class="about-feature-card__title">24/7 Access</h3>
                        <p class="about-feature-card__desc">Resources and guidance available when you need them.</p>
                    </article>

                    <article class="about-feature-card">
                        <span class="about-feature-card__icon" aria-hidden="true">ED</span>
                        <h3 class="about-feature-card__title">Education</h3>
                        <p class="about-feature-card__desc">Practical learning for common caregiving challenges.</p>
                    </article>

                    <article class="about-feature-card">
                        <span class="about-feature-card__icon" aria-hidden="true">TOOLS</span>
                        <h3 class="about-feature-card__title">Support Tools</h3>
                        <p class="about-feature-card__desc">Helpful tools to reduce stress and build confidence.</p>
                    </article>

                    <article class="about-feature-card">
                        <span class="about-feature-card__icon" aria-hidden="true">NET</span>
                        <h3 class="about-feature-card__title">Community Connection</h3>
                        <p class="about-feature-card__desc">Stay connected and supported through the journey.</p>
                    </article>

                    <article class="about-feature-card">
                        <span class="about-feature-card__icon" aria-hidden="true">MAP</span>
                        <h3 class="about-feature-card__title">Resource Navigation</h3>
                        <p class="about-feature-card__desc">Discover relevant options without searching endlessly.</p>
                    </article>

                    <article class="about-feature-card">
                        <span class="about-feature-card__icon" aria-hidden="true">GUIDE</span>
                        <h3 class="about-feature-card__title">Guided Help</h3>
                        <p class="about-feature-card__desc">Clear next steps and encouragement when you need it.</p>
                    </article>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>