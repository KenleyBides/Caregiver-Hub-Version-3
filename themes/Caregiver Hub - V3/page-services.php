<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();

$contact_url = caregiverhub_get_page_url('contact');
$sign_up_url = caregiverhub_get_page_url('sign-up');
$about_url   = caregiverhub_get_page_url('about');
?>

<main class="site-main site-main--services">
    <div class="services-page">
        <!-- Section: Hero (title, lead, trust pills, optional link) -->
        <header class="services-hero">
            <h1 class="services-hero__title"><?php the_title(); ?></h1>
            <p class="services-hero__lead">
                <?php esc_html_e('Practical support designed around real caregiving: education, tools, and connection when you need them.', 'caregiverhub'); ?>
            </p>
            <ul class="services-trust" aria-label="<?php esc_attr_e('What to expect', 'caregiverhub'); ?>">
                <li class="services-trust__item"><?php esc_html_e('Privacy first design', 'caregiverhub'); ?></li>
                <li class="services-trust__item"><?php esc_html_e('Built for caregivers first', 'caregiverhub'); ?></li>
                <li class="services-trust__item"><?php esc_html_e('Support on your schedule', 'caregiverhub'); ?></li>
            </ul>
            <?php if ($about_url) : ?>
                <p class="services-hero__more">
                    <a class="services-hero__link" href="<?php echo esc_url($about_url); ?>"><?php esc_html_e('Learn our story', 'caregiverhub'); ?></a>
                </p>
            <?php endif; ?>
        </header>

        <!-- Section: How it works (steps) -->
        <section class="services-how" aria-labelledby="services-how-heading">
            <h2 id="services-how-heading" class="services-how__title"><?php esc_html_e('How it works', 'caregiverhub'); ?></h2>
            <p class="services-how__subtitle"><?php esc_html_e('Three simple steps from browsing to belonging.', 'caregiverhub'); ?></p>
            <ol class="services-steps">
                <li class="services-step">
                    <span class="services-step__num" aria-hidden="true">1</span>
                    <h3 class="services-step__title"><?php esc_html_e('Explore', 'caregiverhub'); ?></h3>
                    <p class="services-step__desc"><?php esc_html_e('Browse resources and see what the hub offers, with no pressure.', 'caregiverhub'); ?></p>
                </li>
                <li class="services-step">
                    <span class="services-step__num" aria-hidden="true">2</span>
                    <h3 class="services-step__title"><?php esc_html_e('Join', 'caregiverhub'); ?></h3>
                    <p class="services-step__desc"><?php esc_html_e('Create an account when you’re ready for member features like Chat.', 'caregiverhub'); ?></p>
                </li>
                <li class="services-step">
                    <span class="services-step__num" aria-hidden="true">3</span>
                    <h3 class="services-step__title"><?php esc_html_e('Connect', 'caregiverhub'); ?></h3>
                    <p class="services-step__desc"><?php esc_html_e('Use tools, education, and community in a space made for caregivers.', 'caregiverhub'); ?></p>
                </li>
            </ol>
        </section>

        <!-- Section: Feature grid (what you can use) -->
        <section class="services-section" aria-labelledby="services-features-heading">
            <h2 id="services-features-heading" class="services-section__title"><?php esc_html_e('What you can use every day', 'caregiverhub'); ?></h2>
            <p class="services-section__subtitle">
                <?php esc_html_e('A central place to learn, find resources, and get support, built for caregivers.', 'caregiverhub'); ?>
            </p>

            <div class="services-grid">
                <article class="services-card">
                    <div class="services-card__icon services-card__icon--teal" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>
                        </svg>
                    </div>
                    <h3 class="services-card__title"><?php esc_html_e('24/7 access', 'caregiverhub'); ?></h3>
                    <p class="services-card__desc"><?php esc_html_e('Information and guidance available whenever your day allows, not only during office hours.', 'caregiverhub'); ?></p>
                </article>

                <article class="services-card">
                    <div class="services-card__icon services-card__icon--navy" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/><path d="M8 7h8"/><path d="M8 11h6"/>
                        </svg>
                    </div>
                    <h3 class="services-card__title"><?php esc_html_e('Education', 'caregiverhub'); ?></h3>
                    <p class="services-card__desc"><?php esc_html_e('Clear, practical learning for common caregiving situations, without the jargon.', 'caregiverhub'); ?></p>
                </article>

                <article class="services-card">
                    <div class="services-card__icon services-card__icon--orange" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                        </svg>
                    </div>
                    <h3 class="services-card__title"><?php esc_html_e('Support tools', 'caregiverhub'); ?></h3>
                    <p class="services-card__desc"><?php esc_html_e('Helpful tools and prompts to ease stress and build confidence step by step.', 'caregiverhub'); ?></p>
                </article>

                <article class="services-card">
                    <div class="services-card__icon services-card__icon--green" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h3 class="services-card__title"><?php esc_html_e('Community connection', 'caregiverhub'); ?></h3>
                    <p class="services-card__desc"><?php esc_html_e('Ways to stay connected and supported so you don’t have to navigate everything alone.', 'caregiverhub'); ?></p>
                </article>

                <article class="services-card">
                    <div class="services-card__icon services-card__icon--teal" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <h3 class="services-card__title"><?php esc_html_e('Resource navigation', 'caregiverhub'); ?></h3>
                    <p class="services-card__desc"><?php esc_html_e('Find relevant options faster, without endless searching or dead ends.', 'caregiverhub'); ?></p>
                </article>

                <article class="services-card">
                    <div class="services-card__icon services-card__icon--navy" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon fill="none" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                    </div>
                    <h3 class="services-card__title"><?php esc_html_e('Guided help', 'caregiverhub'); ?></h3>
                    <p class="services-card__desc"><?php esc_html_e('Clear next steps and encouragement when you’re unsure what to do next.', 'caregiverhub'); ?></p>
                </article>
            </div>
        </section>

        <!-- Section: Quote -->
        <aside class="services-quote" aria-labelledby="services-quote-heading">
            <h2 id="services-quote-heading" class="screen-reader-text"><?php esc_html_e('Community voice', 'caregiverhub'); ?></h2>
            <blockquote class="services-quote__body">
                <p><?php esc_html_e('Having everything in one place, with learning, tools, and people who get it, makes the hard days a little lighter.', 'caregiverhub'); ?></p>
                <footer class="services-quote__cite"><?php esc_html_e('A caregiver using the hub', 'caregiverhub'); ?></footer>
            </blockquote>
        </aside>

        <section class="services-faq" aria-labelledby="services-faq-heading">
            <h2 id="services-faq-heading" class="services-faq__title"><?php esc_html_e('Common questions', 'caregiverhub'); ?></h2>
            <p class="services-faq__intro"><?php esc_html_e('Quick answers about how the hub fits into your caregiving journey.', 'caregiverhub'); ?></p>
            <div class="services-faq__list">
                <details class="services-faq__item">
                    <summary class="services-faq__q"><?php esc_html_e('Is there a cost to use the hub?', 'caregiverhub'); ?></summary>
                    <div class="services-faq__a">
                        <p><?php esc_html_e('Public resources on the site are free to browse. Some features, like member Chat, may require a free account, depending on how your organization configures access.', 'caregiverhub'); ?></p>
                    </div>
                </details>
                <details class="services-faq__item">
                    <summary class="services-faq__q"><?php esc_html_e('Do I need an account for everything?', 'caregiverhub'); ?></summary>
                    <div class="services-faq__a">
                        <p><?php esc_html_e('No. You can explore much of the site without signing in. Creating an account unlocks member only tools and community spaces.', 'caregiverhub'); ?></p>
                    </div>
                </details>
                <details class="services-faq__item">
                    <summary class="services-faq__q"><?php esc_html_e('Is my information kept private?', 'caregiverhub'); ?></summary>
                    <div class="services-faq__a">
                        <p><?php esc_html_e('The hub is built with privacy in mind. For details on data use, see your organization’s privacy policy linked in the site footer.', 'caregiverhub'); ?></p>
                    </div>
                </details>
                <details class="services-faq__item">
                    <summary class="services-faq__q"><?php esc_html_e('Who can I contact if I need help?', 'caregiverhub'); ?></summary>
                    <div class="services-faq__a">
                        <?php if ($contact_url) : ?>
                            <p>
                                <?php esc_html_e('Reach out through our ', 'caregiverhub'); ?>
                                <a class="services-faq__link" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Contact page', 'caregiverhub'); ?></a><?php esc_html_e('. We are glad to point you in the right direction.', 'caregiverhub'); ?>
                            </p>
                        <?php else : ?>
                            <p><?php esc_html_e('Use the contact options your organization provides on this site, or ask your coordinator for support.', 'caregiverhub'); ?></p>
                        <?php endif; ?>
                    </div>
                </details>
            </div>
        </section>

        <!-- Section: Call to action -->
        <section class="services-cta" aria-labelledby="services-cta-heading">
            <div class="services-cta__inner">
                <h2 id="services-cta-heading" class="services-cta__title"><?php esc_html_e('Take the next step', 'caregiverhub'); ?></h2>
                <p class="services-cta__text">
                    <?php esc_html_e('Questions about the hub, or ready to join? We’re here to help.', 'caregiverhub'); ?>
                </p>
                <div class="services-cta__actions">
                    <?php if ($contact_url) : ?>
                        <a class="services-cta__btn services-cta__btn--primary" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Contact us', 'caregiverhub'); ?></a>
                    <?php endif; ?>
                    <?php if ($sign_up_url && get_option('users_can_register')) : ?>
                        <a class="services-cta__btn services-cta__btn--secondary" href="<?php echo esc_url($sign_up_url); ?>"><?php esc_html_e('Create an account', 'caregiverhub'); ?></a>
                    <?php endif; ?>
                    <?php if (!$contact_url && !($sign_up_url && get_option('users_can_register'))) : ?>
                        <a class="services-cta__btn services-cta__btn--primary" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Back to home', 'caregiverhub'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
