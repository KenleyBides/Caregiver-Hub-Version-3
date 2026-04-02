<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();

$sign_up_url   = caregiverhub_get_page_url('sign-up');
$contact_url   = caregiverhub_get_page_url('contact');
$services_url  = caregiverhub_get_page_url('services');
?>

<main class="site-main site-main--services">
    <div class="services-page about-page">
        <!-- Section: Hero (title, lead, trust pills, optional link) -->
        <header class="services-hero">
            <h1 class="services-hero__title"><?php the_title(); ?></h1>
            <p class="services-hero__lead">
                <?php esc_html_e('Caregivers balance responsibilities, personal wellbeing, and access to the right resources. When support is limited, stress can build quickly.', 'caregiverhub'); ?>
            </p>
            <ul class="services-trust about-trust" aria-label="<?php esc_attr_e('What drives the hub', 'caregiverhub'); ?>">
                <li class="services-trust__item"><?php esc_html_e('Rooted in community', 'caregiverhub'); ?></li>
                <li class="services-trust__item"><?php esc_html_e('Designed for real life', 'caregiverhub'); ?></li>
                <li class="services-trust__item"><?php esc_html_e('Strength in connection', 'caregiverhub'); ?></li>
            </ul>
            <?php if ($services_url) : ?>
                <p class="services-hero__more">
                    <a class="services-hero__link" href="<?php echo esc_url($services_url); ?>"><?php esc_html_e('See what we offer', 'caregiverhub'); ?></a>
                </p>
            <?php endif; ?>
        </header>

        <!-- Section: What we stand for (mission cards) -->
        <section class="services-section about-section--mission" aria-labelledby="about-mission-heading">
            <h2 id="about-mission-heading" class="services-section__title"><?php esc_html_e('What we stand for', 'caregiverhub'); ?></h2>
            <p class="services-section__subtitle">
                <?php esc_html_e('The hub exists to make support easier to find, easier to use, and easier to sustain.', 'caregiverhub'); ?>
            </p>
            <div class="services-grid about-mission-grid">
                <article class="services-card">
                    <div class="services-card__icon services-card__icon--teal" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>
                    </div>
                    <h3 class="services-card__title"><?php esc_html_e('Dignity first', 'caregiverhub'); ?></h3>
                    <p class="services-card__desc"><?php esc_html_e('Every caregiver deserves respect for their reality, their limits, and their capacity to grow.', 'caregiverhub'); ?></p>
                </article>
                <article class="services-card">
                    <div class="services-card__icon services-card__icon--navy" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/><path d="M8 7h8"/><path d="M8 11h6"/>
                        </svg>
                    </div>
                    <h3 class="services-card__title"><?php esc_html_e('Clear information', 'caregiverhub'); ?></h3>
                    <p class="services-card__desc"><?php esc_html_e('We prefer plain language and practical guidance you can use the same day.', 'caregiverhub'); ?></p>
                </article>
                <article class="services-card">
                    <div class="services-card__icon services-card__icon--orange" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h3 class="services-card__title"><?php esc_html_e('No one alone', 'caregiverhub'); ?></h3>
                    <p class="services-card__desc"><?php esc_html_e('Connection matters. The hub helps you find peers, tools, and paths forward together.', 'caregiverhub'); ?></p>
                </article>
            </div>
        </section>

        <!-- Section: Problem and solution -->
        <section class="services-section about-section--split" aria-labelledby="about-split-heading">
            <h2 id="about-split-heading" class="services-section__title"><?php esc_html_e('Why caregivers need more than schedules', 'caregiverhub'); ?></h2>
            <p class="services-section__subtitle about-section__split-intro">
                <?php esc_html_e('Care does not follow a nine to five. Support has to meet people where they actually live and work.', 'caregiverhub'); ?>
            </p>

            <div class="about-split">
                <article class="about-split__card about-split__card--problem">
                    <h3 class="about-split__card-title"><?php esc_html_e('Problem', 'caregiverhub'); ?></h3>
                    <ul class="about-bullets">
                        <li><?php esc_html_e('Limited staffing can delay help when it is needed most.', 'caregiverhub'); ?></li>
                        <li><?php esc_html_e('Caregivers need guidance that fits real life, not just business hours.', 'caregiverhub'); ?></li>
                    </ul>
                </article>

                <article class="about-split__card about-split__card--solution">
                    <h3 class="about-split__card-title"><?php esc_html_e('Solution', 'caregiverhub'); ?></h3>
                    <ul class="about-bullets">
                        <li><?php esc_html_e('Around the clock access to information, education, and practical support tools.', 'caregiverhub'); ?></li>
                        <li><?php esc_html_e('Help caregivers anytime, with less waiting and fewer barriers.', 'caregiverhub'); ?></li>
                    </ul>
                </article>
            </div>
        </section>

        <!-- Section: Quote -->
        <aside class="services-quote about-quote" aria-labelledby="about-quote-heading">
            <h2 id="about-quote-heading" class="screen-reader-text"><?php esc_html_e('Why this matters', 'caregiverhub'); ?></h2>
            <blockquote class="services-quote__body">
                <p><?php esc_html_e('Caregiving is not a solo project. When we build tools and spaces that honour that truth, more families get the air they need to keep going.', 'caregiverhub'); ?></p>
                <footer class="services-quote__cite"><?php esc_html_e('Caregiver Hub vision', 'caregiverhub'); ?></footer>
            </blockquote>
        </aside>

        <!-- Section: FAQ -->
        <section class="services-faq about-faq" aria-labelledby="about-faq-heading">
            <h2 id="about-faq-heading" class="services-faq__title"><?php esc_html_e('About the hub', 'caregiverhub'); ?></h2>
            <p class="services-faq__intro"><?php esc_html_e('Straight answers as you get to know us.', 'caregiverhub'); ?></p>
            <div class="services-faq__list">
                <details class="services-faq__item">
                    <summary class="services-faq__q"><?php esc_html_e('What is the Caregiver Hub?', 'caregiverhub'); ?></summary>
                    <div class="services-faq__a">
                        <p><?php esc_html_e('It is a digital home for learning, tools, and community so caregivers can find help without hunting across dozens of places.', 'caregiverhub'); ?></p>
                    </div>
                </details>
                <details class="services-faq__item">
                    <summary class="services-faq__q"><?php esc_html_e('Who is it for?', 'caregiverhub'); ?></summary>
                    <div class="services-faq__a">
                        <p><?php esc_html_e('Anyone supporting a family member, friend, or neighbour: unpaid caregivers, family members, and allies who want to stay informed and connected.', 'caregiverhub'); ?></p>
                    </div>
                </details>
                <details class="services-faq__item">
                    <summary class="services-faq__q"><?php esc_html_e('How is this different from formal services?', 'caregiverhub'); ?></summary>
                    <div class="services-faq__a">
                        <p><?php esc_html_e('Clinical and community services remain essential. The hub adds always available education, navigation, and peer connection so you are not waiting on a clock for basic support.', 'caregiverhub'); ?></p>
                    </div>
                </details>
            </div>
        </section>

        <section class="services-cta" aria-labelledby="about-cta-heading">
            <div class="services-cta__inner">
                <h2 id="about-cta-heading" class="services-cta__title"><?php esc_html_e('Join the Caregiver Hub', 'caregiverhub'); ?></h2>
                <p class="services-cta__text">
                    <?php esc_html_e('Join us in bringing this vision to life. Your skills, creativity, and collaboration can help make meaningful support accessible for caregivers across the community.', 'caregiverhub'); ?>
                </p>

                <div class="services-cta__values">
                    <h3 class="services-cta__values-title"><?php esc_html_e('Built to support', 'caregiverhub'); ?></h3>
                    <ul class="services-cta__values-list">
                        <li><?php esc_html_e('Strength Through Support', 'caregiverhub'); ?></li>
                        <li><?php esc_html_e('Empowerment Through Knowledge', 'caregiverhub'); ?></li>
                        <li><?php esc_html_e('Health, resiliency, and connection', 'caregiverhub'); ?></li>
                    </ul>
                </div>

                <div class="services-cta__actions">
                    <?php if ($sign_up_url && get_option('users_can_register')) : ?>
                        <a class="services-cta__btn services-cta__btn--primary" href="<?php echo esc_url($sign_up_url); ?>"><?php esc_html_e('Get Started', 'caregiverhub'); ?></a>
                    <?php endif; ?>
                    <?php if ($contact_url) : ?>
                        <a class="services-cta__btn services-cta__btn--secondary" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Contact us', 'caregiverhub'); ?></a>
                    <?php endif; ?>
                    <?php if (!($sign_up_url && get_option('users_can_register')) && !$contact_url) : ?>
                        <a class="services-cta__btn services-cta__btn--primary" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Back to home', 'caregiverhub'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
