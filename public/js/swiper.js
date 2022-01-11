const carouselSwiper = new Swiper("#carousel-swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: false,
    effect: "fade",

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// 常數 定義好後不會再去改動的 用 const
const productSwiper = new Swiper("#product-swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    // centeredSlides: true,
    breakpoints: {
        // when window width is >= 320px
        769: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        // when window width is >= 480px
        993: {
          slidesPerView: 3,
          spaceBetween: 30
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});