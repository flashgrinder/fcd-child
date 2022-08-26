import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Draggable } from "gsap/Draggable";

function init() {

    gsap.registerPlugin(ScrollTrigger);

    let sectionsScreen = gsap.utils.toArray(".screen");
    let scrollContainer = document.querySelector(".scroll-container");

    ScrollTrigger.matchMedia({
        "(min-width: 1024px)": () => {
        
            let scrollTween = gsap.to(sectionsScreen, {
                x: () => -(scrollContainer.scrollWidth - document.documentElement.clientWidth) + "px",
                ease: "none", // <-- IMPORTANT!
                scrollTrigger: {
                  trigger: scrollContainer,
                  pin: true,
                  scrub: 1,
                  end: () => "+=" + scrollContainer.offsetWidth
                }
            });

            // Screen-entry
            const tlScreenEntry = gsap.timeline( {
                x: 0,
                ease: "ease",
                scrollTrigger: {
                    trigger: ".js-screen-entry",
                    containerAnimation: scrollTween,
                    start: "top 30%",
                    end:"+=100%",
                    scrub: true,
                }
            });
        
            tlScreenEntry.from(".js-screen-entry__layer--one", 1.5, {
                x: -140
            }, '-=1.5')
            .from(".js-screen-entry__layer--two", 2, {
                x: -160,
            }, '-=2')
            .from(".js-screen-entry__layer--three", 2, {
                x: -180,
            }, '-=2')
            .from(".js-screen-entry__layer--four", 1.6, {
                x: -70,
            }, '-=1.6');
        
            // Screen-brand
            const tlScreenBrand = gsap.timeline( {
                ease: "ease",
                scrollTrigger: {
                    trigger: ".js-screen-brand",
                    containerAnimation: scrollTween,
                    start: "center 85%",
                    end: "center 10%",
                    scrub: true,
                }
            });
        
            tlScreenBrand.from(".js-screen-brand__layer--one", 1.5, {
                x: 50
            }, '-=1.5')
            .from(".js-screen-brand__layer--two", 1.5, {
                x: 80,
            }, '-=1.5')
            .from(".js-screen-brand__layer--three", 1.5, {
                x: 110,
            }, '-=1.5')
            .from(".js-screen-brand__layer--four", 1.5, {
                x: 130,
            }, '-=1.5');
        
            // Screen-hackerman
            const tlScreenHackerman = gsap.timeline( {
                ease: "ease",
                scrollTrigger: {
                    trigger: ".js-screen-hackerman",
                    containerAnimation: scrollTween,
                    start: "center 85%",
                    end: "center 10%",
                    scrub: true,
                }
            });
        
            tlScreenHackerman.from(".js-screen-hackerman__layer--one", 1.5, {
                x: 70
            }, '-=1.5')
            .from(".js-screen-hackerman__layer--two", 1.5, {
                x: 110,
            }, '-=1.5')
            .from(".js-screen-hackerman__layer--three", 1.5, {
                x: 150,
            }, '-=1.5');
        
            // Screen-marketing
            const tlScreenMarketing = gsap.timeline( {
                ease: "ease",
                scrollTrigger: {
                    trigger: ".js-screen-marketing",
                    containerAnimation: scrollTween,
                    start: "center 70%",
                    end: "center 0%",
                    scrub: true,
                }
            });
        
            tlScreenMarketing.to(".js-screen-marketing__layer--one", 1.5, {
                x: -70
            }, '-=1.5')
            .to(".js-screen-marketing__layer--two", 1.5, {
                x: -110,
            }, '-=1.5')
            .to(".js-screen-marketing__layer--three", 1.5, {
                x: -130,
            }, '-=1.5');
        
            // Screen-it
            const tlScreenIt = gsap.timeline( {
                // x: 0,
                ease: "ease",
                scrollTrigger: {
                    trigger: ".js-screen-it",
                    containerAnimation: scrollTween,
                    start: "center 70%",
                    end: "center 10%",
                    scrub: true,
                }
            });
        
            tlScreenIt.to(".js-screen-it__layer--one", 1.5, {
                x: -70
            }, '-=1.5')
            .from(".js-screen-it__layer--two", 1.5, {
                x: 100,
            }, '-=1.5')
            .to(".js-screen-it__layer--three", 1.5, {
                x: -130,
            }, '-=1.5');

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