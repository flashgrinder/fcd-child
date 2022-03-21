import gsap from 'gsap';
import horizontalScroll from '../libs/modules/horizontal-scroll';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });
    
    horizontalScroll.init();
});