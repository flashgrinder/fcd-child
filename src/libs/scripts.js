import gsap from 'gsap';
import horizontalScroll from '../libs/modules/horizontal-scroll';
import burgerMenu from '../libs/modules/burger-menu.js';
import progressBar from '../libs/modules/progress-bar';
import parallaxjs from '../libs/modules/parallax';
import tarifsSlider from '../libs/modules/tarifs';
import partnersSlider from '../libs/modules/partners';
import casesSlider from '../libs/modules/cases';
import tabs from '../libs/modules/tabs';
import accardion from '../libs/modules/accordion';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true
    });

    const horizintalScrollTrue = document.querySelector('.horizontal-container');
    const progressBarTrue = document.querySelector('.progress');
    const paralaxjsTrue = document.querySelector('.parallax-container');
    const tarifsSliderTrue = document.querySelector('.tarifs__slider');
    const partnersSliderTrue = document.querySelector('.partners__slider');
    const casesSliderTrue = document.querySelector('.cases-slider');
    const tabsTrue = document.querySelector('.tabs');
    const accardionTrue = document.querySelector('.accordion');
    
    horizintalScrollTrue ? horizontalScroll.init() : false;
    burgerMenu.init();
    progressBarTrue ? progressBar.init() : false;
    paralaxjsTrue ? parallaxjs.init() : false;
    tarifsSliderTrue ? tarifsSlider.init() : false;
    partnersSliderTrue ? partnersSlider.init() : false;
    casesSliderTrue ? casesSlider.init() : false;
    tabsTrue ? tabs.init() : false;
    accardionTrue ? accardion.init() : false;
});