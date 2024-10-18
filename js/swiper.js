document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper('.evenementen-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        // Responsive breakpoints
        breakpoints: {

            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            // when window width is >= 640px
            768: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            // when window width is >= 640px
            992: {
                slidesPerView: 3,
                spaceBetween: 50
            }
        },
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });
});