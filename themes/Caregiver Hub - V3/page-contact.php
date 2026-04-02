<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>

<main class="site-main site-main--contact">
    <!-- Section: Page heading and intro -->
    <h1 class="contact-page__heading"><?php the_title(); ?></h1>
    <p class="contact-page__intro">We're here to help. Choose an office below or use the quick links to call, email, or get directions.</p>

    <!-- Section: Quick contact bar (call, hours, email) -->
    <section class="contact-quickbar" aria-label="Quick contact details">
        <div class="contact-quickbar__item">
            <span class="contact-quickbar__label">Call us now</span>
            <a href="tel:+17057269082">705-726-9082</a>
        </div>
        <div class="contact-quickbar__item">
            <span class="contact-quickbar__label">Working hours</span>
            <span>Monday-Friday: 8:30 AM - 4:30 PM</span>
        </div>
        <div class="contact-quickbar__item">
            <span class="contact-quickbar__label">Email</span>
            <a href="mailto:inquiries@empowersimcoe.ca">inquiries@empowersimcoe.ca</a>
        </div>
    </section>

    <!-- Section: Office listings -->
    <div class="contact-page">
        <!-- Section: Barrie office -->
        <section class="contact-office" aria-labelledby="contact-barrie-title">
            <h2 id="contact-barrie-title" class="contact-office__title">Barrie Administration Office</h2>
            <p class="contact-office__location">Barrie</p>
            <address class="contact-office__address">
                39 Fraser Court<br>
                Barrie, ON L4N 5J5
            </address>

            <div class="contact-office__block">
                <h3 class="contact-office__label">Phone</h3>
                <p class="contact-office__value">
                    <a href="tel:+17057269082">705-726-9082</a>
                </p>
                <p class="contact-office__value contact-office__value--fax">
                    <span class="contact-office__fax-note">Fax</span>
                    <a href="tel:+17057266875">705-726-6875</a>
                </p>
            </div>

            <div class="contact-office__block">
                <h3 class="contact-office__label">Email</h3>
                <p class="contact-office__value">
                    <a href="mailto:inquiries@empowersimcoe.ca">inquiries@empowersimcoe.ca</a>
                </p>
            </div>

            <div class="contact-office__block">
                <h3 class="contact-office__label">Programs &amp; Services</h3>
                <ul class="contact-office__list">
                    <li>Accommodations</li>
                    <li>Community Support Services</li>
                    <li>Regional Housing Support Services</li>
                    <li>Family Support Services</li>
                </ul>
            </div>

            <div class="contact-office__actions">
                <a class="contact-office__action" href="tel:+17057269082">Call</a>
                <a class="contact-office__action" href="mailto:inquiries@empowersimcoe.ca">Email</a>
                <a class="contact-office__action" href="https://maps.google.com/?q=39+Fraser+Court,+Barrie,+ON+L4N+5J5" target="_blank" rel="noopener noreferrer">Directions</a>
            </div>
        </section>

        <!-- Section: Orillia office -->
        <section class="contact-office" aria-labelledby="contact-orillia-title">
            <h2 id="contact-orillia-title" class="contact-office__title">Orillia office</h2>
            <p class="contact-office__location">Administration Office, Orillia</p>
            <address class="contact-office__address">
                35 West Street N.<br>
                Orillia, ON L3V 5B9
            </address>

            <div class="contact-office__block">
                <h3 class="contact-office__label">Phone</h3>
                <p class="contact-office__value">
                    <a href="tel:+17053275391">705-327-5391</a>
                </p>
                <p class="contact-office__value contact-office__value--fax">
                    <span class="contact-office__fax-note">Fax</span>
                    <a href="tel:+17053279700">705-327-9700</a>
                </p>
            </div>

            <div class="contact-office__block">
                <h3 class="contact-office__label">Email</h3>
                <p class="contact-office__value">
                    <a href="mailto:inquiries@empowersimcoe.ca">inquiries@empowersimcoe.ca</a>
                </p>
            </div>

            <div class="contact-office__block">
                <h3 class="contact-office__label">Programs &amp; Services</h3>
                <ul class="contact-office__list">
                    <li>Accommodations</li>
                    <li>Community Support Services</li>
                </ul>
            </div>

            <div class="contact-office__actions">
                <a class="contact-office__action" href="tel:+17053275391">Call</a>
                <a class="contact-office__action" href="mailto:inquiries@empowersimcoe.ca">Email</a>
                <a class="contact-office__action" href="https://maps.google.com/?q=35+West+Street+N,+Orillia,+ON+L3V+5B9" target="_blank" rel="noopener noreferrer">Directions</a>
            </div>
        </section>
    </div>

    <!-- Section: Support message -->
    <section class="contact-support-note" aria-label="Support message">
        <h2>We're in your corner</h2>
        <p>
        Whether you have questions about services, require assistance, or want to become involved, our team is here to help.
        Contact us by phone or email, and we will ensure that you have the necessary information as soon as possible.
        </p>
    </section>

    <!-- Section: Map and external map links -->
    <section class="contact-map" aria-label="Office locations map">
        <div class="contact-map__head">
            <h2>Find us in Simcoe County</h2>
            <p>Use the map below for quick directions to our Barrie and Orillia offices.</p>
        </div>

        <div class="contact-map__frame">
            <iframe
                title="Empower Simcoe office locations"
                src="https://www.openstreetmap.org/export/embed.html?bbox=-80.98%2C44.34%2C-79.14%2C44.71&layer=mapnik&marker=44.358889%2C-79.686111"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>

        <div class="contact-map__links">
            <a href="https://maps.google.com/?q=39+Fraser+Court,+Barrie,+ON+L4N+5J5" target="_blank" rel="noopener noreferrer">Open Barrie office in Google Maps</a>
            <a href="https://maps.google.com/?q=35+West+Street+N,+Orillia,+ON+L3V+5B9" target="_blank" rel="noopener noreferrer">Open Orillia office in Google Maps</a>
        </div>
    </section>

    <!-- Section: Optional page body content from the editor -->
    <?php if (get_the_content()) : ?>
        <div class="contact-page__content entry-content">
            <?php the_content(); ?>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
