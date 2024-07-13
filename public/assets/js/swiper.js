var swiper = new Swiper(".mySwiper", {
    // slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        // Saat lebar layar kurang dari atau sama dengan 576px
        576: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        // Saat lebar layar kurang dari atau sama dengan 768px
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        // Saat lebar layar kurang dari atau sama dengan 992px
        992: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        // Saat lebar layar lebih dari 992px
        1200: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },
    on: {
        slideChangeTransitionEnd: function () {
            var rotatingRing = document.querySelector(".rotating-ring");
            rotatingRing.classList.toggle(
                "rotate-right",
                this.swipeDirection === "next"
            );
        },
    },
});
