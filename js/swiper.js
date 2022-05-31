const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});




// <!-- Add Pagination -->
// <div class="item_pagination swiper-pagination"></div>
// <!-- Add Arrows -->
// <div class="next-arrow"><i class="fa-solid fa-caret-right"></i></div>
// <div class="back-arrow"><i class="fa-solid fa-caret-left"></i></div>