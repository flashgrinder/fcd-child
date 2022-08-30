import gsap from 'gsap';
import containerScroll from '../libs/modules/horizontal-scroll';
import burgerMenu from '../libs/modules/burger-menu.js';
import progressBar from '../libs/modules/progress-bar';
import parallaxjs from '../libs/modules/parallax';
import tarifsSlider from '../libs/modules/tarifs';
import partnersSlider from '../libs/modules/partners';
import casesSlider from '../libs/modules/cases';
import tabs from '../libs/modules/tabs';
import accordion from '../libs/modules/accordion';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        force3D: true
    });

    const burgerMenuTrue = document.querySelector('.burger-menu');
    const containerScrollTrue = document.querySelector('.scroll-container');
    const progressBarTrue = document.querySelector('.progress');
    const paralaxjsTrue = document.querySelector('.parallax-container');
    const tarifsSliderTrue = document.querySelector('.tarifs__slider');
    const partnersSliderTrue = document.querySelector('.partners__slider');
    const casesSliderTrue = document.querySelector('.cases-slider');
    const tabsTrue = document.querySelector('.tabs');
    const accordionTrue = document.querySelector('.accordion');
    
    containerScrollTrue ? containerScroll.init() : false;
    burgerMenuTrue ? burgerMenu.init() : false;
    progressBarTrue ? progressBar.init() : false;
    paralaxjsTrue ? parallaxjs.init() : false;
    tarifsSliderTrue ? tarifsSlider.init() : false;
    partnersSliderTrue ? partnersSlider.init() : false;
    casesSliderTrue ? casesSlider.init() : false;
    tabsTrue ? tabs.init() : false;
    accordionTrue ? accordion.init() : false;
});