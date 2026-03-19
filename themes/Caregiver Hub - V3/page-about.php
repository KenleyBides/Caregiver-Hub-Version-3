<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>

<main class="site-main">
    <div class="about-layout about-layout--new">
        <section class="about-new-section about-new-section--problem" aria-label="Problem and solution">
            <div class="about-new__container">
                <h2 class="about-new__title">Why caregivers need more than schedules</h2>
                <p class="about-new__subtitle">
                    Caregivers balance responsibilities, personal well-being, and access to the right resources.
                    When support is limited, stress can build quickly.
                </p>

                <div class="about-split">
                    <article class="about-split__card about-split__card--problem">
                        <h3 class="about-split__card-title">Problem</h3>
                        <ul class="about-bullets">
                            <li>Limited staffing can delay help when it is needed most.</li>
                            <li>Caregivers need guidance that fits real life, not just business hours.</li>
                        </ul>
                    </article>

                    <article class="about-split__card about-split__card--solution">
                        <h3 class="about-split__card-title">Solution</h3>
                        <ul class="about-bullets">
                            <li>24/7 access to information, education, and practical support tools.</li>
                            <li>Help caregivers anytime, with less waiting and fewer barriers.</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="about-new-section about-new-section--cta" aria-label="Join the Caregiver Hub">
            <div class="about-new__container">
                <div class="about-cta">
                    <div class="about-cta__copy">
                        <h2 class="about-cta__title">Join the Caregiver Hub</h2>
                        <p class="about-cta__text">
                            Join us in bringing this vision to life. Your skills, creativity, and collaboration can help make meaningful support accessible for caregivers across the community.
                        </p>
                        <a class="about-cta__button" href="#">Get Started</a>
                    </div>

                    <div class="about-cta__side">
                        <h3 class="about-cta__side-title">Built to support</h3>
                        <ul class="about-cta__side-list">
                            <li>Strength Through Support</li>
                            <li>Empowerment Through Knowledge</li>
                            <li>Health, resiliency, and connection</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>