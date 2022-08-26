import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

function countNums() {
    
    let nums = document.querySelector('.js-progress-num');
    let numProgress = document.querySelector('.js-progress-bar').value;
    nums.innerHTML = numProgress.toFixed();
    
}

function init() {

    gsap.registerPlugin(ScrollTrigger);

    ScrollTrigger.matchMedia({
        "(min-width: 1024px)": () => {

            const normalProgress = gsap.timeline({
                scrollTrigger: {
                  scrub: true,
                  trigger: ".screen",
                  start: 1,
                  end: "max"
                }
            });
        
            normalProgress.to(".js-progress-bar", {
                value: 6,
                snap: { innerHTML: 1 },
                onUpdate: countNums,
                ease: "none"
            });
        }
    });

    

}

export default { init }