import Swiper, { Navigation } from 'swiper';

function init() {

    Swiper.use([Navigation]);

    const tarifsSliderStore = new Swiper(".tarifs__swiper-container--default", {
        slidesPerView: 1,
        // autoHeight: true,
        calculateHeight:true,
        navigation: {
            nextEl: '.tarifs__swiper-button-next',
            prevEl: '.tarifs__swiper-button-prev'
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

    const tarifsSliderWeb = new Swiper(".tarifs__swiper-container--web", {
        slidesPerView: 1,
        // autoHeight: true,
        calculateHeight:true,
        navigation: {
            nextEl: '.tarifs__swiper-button-next',
            prevEl: '.tarifs__swiper-button-prev'
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