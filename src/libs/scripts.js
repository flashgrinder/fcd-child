import gsap from 'gsap';
import horizontalScroll from '../libs/modules/horizontal-scroll';
import progressBar from '../libs/modules/progress-bar';
import parallaxjs from '../libs/modules/parallax';
import tarifsSlider from '../libs/modules/tarifs';
import casesSlider from '../libs/modules/cases';
import tabs from '../libs/modules/tabs';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true
    });

    const horizintalScrollTrue = document.querySelector('.horizontal-container');
    const progressBarTrue = document.querySelector('.progress');
    const paralaxjsTrue = document.querySelector('.parallax-container');
    const tarifsSliderTrue = document.querySelector('.tarifs__slider');
    const casesSliderTrue = document.querySelector('.cases-slider');
    const tabsTrue = document.querySelector('.tabs');
    
    horizintalScrollTrue ? horizontalScroll.init() : false;
    progressBarTrue ? progressBar.init() : false;
    paralaxjsTrue ? parallaxjs.init() : false;
    tarifsSliderTrue ? tarifsSlider.init() : false;
    casesSliderTrue ? casesSlider.init() : false;
    tabsTrue ? tabs.init() : false;
});