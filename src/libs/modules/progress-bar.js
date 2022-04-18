import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

function countNums() {
    
    let nums = document.querySelector('.js-progress-num');
    let numProgress = document.querySelector('.js-progress-bar').value;
    nums.innerHTML = numProgress.toFixed();
    
}

function init() {

    gsap.registerPlugin(ScrollTrigger);
    
    const normalProgress = gsap.timeline({
        scrollTrigger: {
          scrub: true,
          trigger: ".screen",
          start: 1,
          end: "max"
        }
    });

    normalProgress.to(".js-progress-bar", {
        value: 5,
        snap: { innerHTML: 1 },
        onUpdate: countNums,
        ease: "none"
    });

}

export default { init }