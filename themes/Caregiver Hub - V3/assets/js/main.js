document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('[data-carousel]');

    if (!carousel) {
        return;
    }

    const slides = carousel.querySelectorAll('.media-slide');
    const dots = carousel.querySelectorAll('.media-carousel__dot');

    if (!slides.length) {
        return;
    }

    let activeIndex = 0;

    slides.forEach((slide, index) => {
        if (slide.classList.contains('is-active')) {
            activeIndex = index;
        }
    });

    if (dots[activeIndex]) {
        dots.forEach((dot) => dot.classList.remove('is-active'));
        dots[activeIndex].classList.add('is-active');
    }

    const setActiveSlide = (nextIndex) => {
        slides[activeIndex].classList.remove('is-active');
        if (dots[activeIndex]) {
            dots[activeIndex].classList.remove('is-active');
        }

        activeIndex = nextIndex;
        slides[activeIndex].classList.add('is-active');
        if (dots[activeIndex]) {
            dots[activeIndex].classList.add('is-active');
        }
    };

    window.setInterval(() => {
        const nextIndex = (activeIndex + 1) % slides.length;
        setActiveSlide(nextIndex);
    }, 3000);
});