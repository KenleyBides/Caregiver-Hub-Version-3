document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('[data-carousel]');

    if (carousel) {
        const slides = carousel.querySelectorAll('.media-slide');
        const dots = carousel.querySelectorAll('.media-carousel__dot');

        if (slides.length) {
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
        }
    }

    const toggleBtn = document.getElementById('sign-in-toggle-pw');
    const passInput = document.querySelector('#user_pass.sign-in-input--password');
    if (toggleBtn && passInput) {
        const wrap = passInput.closest('.sign-in-input-wrap');
        const showLabel = toggleBtn.dataset.labelShow || 'Show password';
        const hideLabel = toggleBtn.dataset.labelHide || 'Hide password';

        toggleBtn.addEventListener('click', () => {
            const revealing = passInput.type === 'password';
            passInput.type = revealing ? 'text' : 'password';
            toggleBtn.setAttribute('aria-pressed', revealing ? 'true' : 'false');
            toggleBtn.setAttribute('aria-label', revealing ? hideLabel : showLabel);
            if (wrap) {
                wrap.classList.toggle('sign-in-input-wrap--password-visible', revealing);
            }
        });
    }
});
