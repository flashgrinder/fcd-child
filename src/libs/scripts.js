import gsap from 'gsap';
// import containerScroll from '../libs/modules/horizontal-scroll';
// import progressBar from '../libs/modules/progress-bar';
import pageTrs from '../libs/modules/transition-page.js';
import gsReveal from '../libs/modules/gs-reveal.js';
import hideShowHeader from '../libs/modules/hide-show-header';
import burgerMenu from '../libs/modules/burger-menu';
import modal from '../libs/modules/modal.js';
import scrollDown from '../libs/modules/scroll-down';
import mainSlider from '../libs/modules/main-slider';
import parallaxjs from '../libs/modules/parallax';
import tarifsSlider from '../libs/modules/tarifs';
import partnersSlider from '../libs/modules/partners';
import casesSlider from '../libs/modules/cases';
import tabs from '../libs/modules/tabs';
import accordion from '../libs/modules/accordion';
import slimSelect from '../libs/modules/slim-select.js';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        force3D: true
    });

    // const containerScrollTrue = document.querySelector('.scroll-container');
    // const progressBarTrue = document.querySelector('.progress');
    const burgerMenuTrue = document.querySelector('.burger-menu');
    const scrollDownTrue = document.querySelector('.js-scroll-down');
    const mainSliderTrue = document.querySelector('.main-slider');
    const paralaxjsTrue = document.querySelector('.parallax-container');
    const tarifsSliderTrue = document.querySelector('.tarifs__slider');
    const partnersSliderTrue = document.querySelector('.partners__slider');
    const casesSliderTrue = document.querySelector('.cases-slider');
    const tabsTrue = document.querySelector('.tabs');
    const accordionTrue = document.querySelector('.accordion');
    const selectTrue = document.querySelector('.js-select');
    
    // containerScrollTrue ? containerScroll.init() : false;
    // progressBarTrue ? progressBar.init() : false;
    pageTrs.init();
    gsReveal.init();
    hideShowHeader.init();
    burgerMenuTrue ? burgerMenu.init() : false;
    modal.init();
    selectTrue ? slimSelect.init() : false;
    scrollDownTrue ? scrollDown.init() : false;
    mainSliderTrue ? mainSlider.init() : false;
    paralaxjsTrue ? parallaxjs.init() : false;
    tarifsSliderTrue ? tarifsSlider.init() : false;
    partnersSliderTrue ? partnersSlider.init() : false;
    casesSliderTrue ? casesSlider.init() : false;
    tabsTrue ? tabs.init() : false;
    accordionTrue ? accordion.init() : false;
});