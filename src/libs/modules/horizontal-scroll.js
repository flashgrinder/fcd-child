import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

function init() {

    gsap.registerPlugin(ScrollTrigger);

    let sectionsScreen = gsap.utils.toArray(".screen");
    let scrollContainer = document.querySelector(".scroll-container");
    let densityScrollContainer = scrollContainer.scrollWidth - document.documentElement.clientWidth;

    let screenEntry = document.querySelector(".js-screen-entry");
    let screenLayerEntryOne = document.querySelector(".screen-entry__layer--one");
    let screenLayerEntryTwo = document.querySelector(".screen-entry__layer--two");
    let screenLayerEntryThree = document.querySelector(".screen-entry__layer--three");
    let screenLayerEntryFour = document.querySelector(".screen-entry__layer--four");

    let screenBrand = document.querySelector(".js-screen-brand");
    let screenLayerBrandOne = document.querySelector(".screen-brand__layer--one");
    let screenLayerBrandTwo = document.querySelector(".screen-brand__layer--two");
    let screenLayerBrandThree = document.querySelector(".screen-brand__layer--three");
    let screenLayerBrandFour = document.querySelector(".screen-brand__layer--four");

    let screenHackerman = document.querySelector(".js-screen-hackerman");
    let screenLayerHackermanOne = document.querySelector(".screen-hackerman__layer--one");
    let screenLayerHackermanTwo = document.querySelector(".screen-hackerman__layer--two");
    let screenLayerHackermanThree = document.querySelector(".screen-hackerman__layer--three");

    let screenMarketing = document.querySelector(".js-screen-marketing");
    let screenLayerMarketingOne = document.querySelector(".screen-marketing__layer--one");
    let screenLayerMarketingTwo = document.querySelector(".screen-marketing__layer--two");
    let screenLayerMarketingThree = document.querySelector(".screen-marketing__layer--three");

    let screenIt = document.querySelector(".js-screen-it");
    let screenLayerItOne = document.querySelector(".screen-it__layer--one");
    let screenLayerItTwo = document.querySelector(".screen-it__layer--two");
    let screenLayerItThree = document.querySelector(".screen-it__layer--three");

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

            // Screen-entry
            // const tlScreenEntry = gsap.timeline();
            
            // ScrollTrigger.create({
            //     trigger: scrollContainer,
            //     containerAnimation: scrollTween,
            //     start: 'top 30%',
            //     end:"+=100%",
            //     scrub: true,
            //     end: () => "+=" + scrollContainer.offsetWidth,
            //     onEnter: () => {
            //         if (screenEntry) {

            //             tlScreenEntry.from(screenLayerEntryOne, 1.5, {
            //                 x: -140
            //             }, '-=1.5')
            //             .from(screenLayerEntryTwo, 2, {
            //                 x: -160,
            //             }, '-=2')
            //             .from(screenLayerEntryThree, 2, {
            //                 x: -180,
            //             }, '-=2')
            //             .from(screenLayerEntryFour, 1.6, {
            //                 x: -70,
            //             }, '-=1.6');

            //         }
            //     },
            // });

            // Screen-entry
            const tlScreenEntry = gsap.timeline( {
                x: 0,
                ease: "ease",
                scrollTrigger: {
                    trigger: screenEntry,
                    containerAnimation: scrollTween,
                    start: "top 30%",
                    end:"+=100%",
                    scrub: true,
                }
            });
        
            tlScreenEntry.from(screenLayerEntryOne, 1.5, {
                x: -140
            }, '-=1.5')
            .from(screenLayerEntryTwo, 2, {
                x: -160,
            }, '-=2')
            .from(screenLayerEntryThree, 2, {
                x: -180,
            }, '-=2')
            .from(screenLayerEntryFour, 1.6, {
                x: -70,
            }, '-=1.6');
        
            // Screen-brand
            const tlScreenBrand = gsap.timeline( {
                ease: "ease",
                scrollTrigger: {
                    trigger: screenBrand,
                    containerAnimation: scrollTween,
                    start: "center 85%",
                    end: "center 10%",
                    scrub: true,
                }
            });
        
            tlScreenBrand.from(screenLayerBrandOne, 1.5, {
                x: 50
            }, '-=1.5')
            .from(screenLayerBrandTwo, 1.5, {
                x: 80,
            }, '-=1.5')
            .from(screenLayerBrandThree, 1.5, {
                x: 110,
            }, '-=1.5')
            .from(screenLayerBrandFour, 1.5, {
                x: 130,
            }, '-=1.5');
        
            // Screen-hackerman
            const tlScreenHackerman = gsap.timeline( {
                ease: "ease",
                scrollTrigger: {
                    trigger: screenHackerman,
                    containerAnimation: scrollTween,
                    start: "center 85%",
                    end: "center 10%",
                    scrub: true,
                }
            });
        
            tlScreenHackerman.from(screenLayerHackermanOne, 1.5, {
                x: 70
            }, '-=1.5')
            .from(screenLayerHackermanTwo, 1.5, {
                x: 110,
            }, '-=1.5')
            .from(screenLayerHackermanThree, 1.5, {
                x: 150,
            }, '-=1.5');
        
            // Screen-marketing
            const tlScreenMarketing = gsap.timeline( {
                ease: "ease",
                scrollTrigger: {
                    trigger: screenMarketing,
                    containerAnimation: scrollTween,
                    start: "center 70%",
                    end: "center 0%",
                    scrub: true,
                }
            });
        
            tlScreenMarketing.to(screenLayerMarketingOne, 1.5, {
                x: -70
            }, '-=1.5')
            .to(screenLayerMarketingTwo, 1.5, {
                x: -110,
            }, '-=1.5')
            .to(screenLayerMarketingThree, 1.5, {
                x: -130,
            }, '-=1.5');
        
            // Screen-it
            const tlScreenIt = gsap.timeline( {
                // x: 0,
                ease: "ease",
                scrollTrigger: {
                    trigger: screenIt,
                    containerAnimation: scrollTween,
                    start: "center 70%",
                    end: "center 10%",
                    scrub: true,
                }
            });
        
            tlScreenIt.to(screenLayerItOne, 1.5, {
                x: -70
            }, '-=1.5')
            .from(screenLayerItTwo, 1.5, {
                x: 100,
            }, '-=1.5')
            .to(screenLayerItThree, 1.5, {
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