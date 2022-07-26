import Swiper, { Navigation } from 'swiper';

function init() {

    Swiper.use([Navigation]);

    const casesSlider = new Swiper(".cases-slider__swiper-container", {
        slidesPerView: 1,
        autoHeight: true,
        loop: true,
        navigation: {
            nextEl: '.cases-slider__swiper-button-next',
            prevEl: '.cases-slider__swiper-button-prev'
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
                slidesPerColumn: 1
            }
        }
    });

}

export default { init }