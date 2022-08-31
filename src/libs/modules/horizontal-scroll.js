import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

function init() {

    gsap.registerPlugin(ScrollTrigger);

    let sectionsScreen = gsap.utils.toArray(".screen");
    let scrollContainer = document.querySelector(".scroll-container");
    let densityScrollContainer = scrollContainer.scrollWidth - document.documentElement.clientWidth;

    ScrollTrigger.matchMedia({
        "(min-width: 1024px)": () => {
            
            let scrollTween = gsap.to(sectionsScreen, {
                x: () => -densityScrollContainer + "px",
                ease: "none", // <-- IMPORTANT!
                scrollTrigger: {
                    trigger: scrollContainer,
                    pin: true,
                    scrub: 1,
                    end: () => "+=" + scrollContainer.offsetWidth
                }
            });
            
            let screenLayer = document.querySelectorAll(".screen__layer");

            screenLayer.forEach( item => {

                const speedItem = item.dataset.speed;
                const itemParent = item.closest('.screen');
                const itemParentWidth = item.closest('.screen').offsetWidth;
                    
                ScrollTrigger.create({
                    trigger: itemParent,
                    containerAnimation: scrollTween,
                    start: 'top left',
                    end: () => "+=" + itemParentWidth,
                    onUpdate: (instance) => {
                            
                        gsap.to(item, {x: speedItem * instance.progress})
    
                    },
                });
            });

        },
        "(max-width: 1024px)": () => {

            let scrollTweenMobile = gsap.to(sectionsScreen, {
                ease: "none", // <-- IMPORTANT!
                scrollTrigger: {
                  trigger: scrollContainer,
                  pin: true,
                  start: "top top",
                  scrub: 1,
                  end: () => "+=0"
                }
            });

        }
    });

}

export default { init }