import Swiper, { Navigation } from 'swiper';

function init() {

    Swiper.use([Navigation]);

    const mainSlider = new Swiper(".main-slider__swiper-container", {
        effect: 'slide',
        slidesPerView: 1,
        autoHeight: true,
        speed: 3000,
        navigation: {
            nextEl: '.main-slider__swiper-button-next',
            prevEl: '.main-slider__swiper-button-prev'
        },
        breakpoints: {
            320: {
                speed: 1500,
            },
            768: {
                speed: 2500,
            }
        }
    });

}

export default { init }