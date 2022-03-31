import gsap from 'gsap';
import horizontalScroll from '../libs/modules/horizontal-scroll';
import parallaxjs from '../libs/modules/parallax';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true
    });

    const horizintalScrollTrue = document.querySelector('.horizontal-container');
    
    horizintalScrollTrue ? horizontalScroll.init() : false;
    parallaxjs.init();
});