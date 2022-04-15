import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Draggable } from "gsap/Draggable";

function init() {

    gsap.registerPlugin(ScrollTrigger);

    let sectionsScreen = gsap.utils.toArray(".screen");
    let container = document.querySelector(".horizontal-container");

    let scrollTween = gsap.to(sectionsScreen, {
        x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
        ease: "none", // <-- IMPORTANT!
        scrollTrigger: {
          trigger: ".horizontal-container",
          pin: true,
          scrub: 1,
          end: () => "+=" + container.offsetWidth
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









    
    // let sections = gsap.utils.toArray(".screen");
    // let container = document.querySelector(".horizontal-container");

    // let horizontalScroll = gsap.to(container, {
    //     x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
    //     ease: "none",
    //     scrollTrigger: {
    //       trigger: container,
    //       invalidateOnRefresh: true,
    //       markers: true,
    //       pin: true,
    //       scrub: 1,
    //     //   snap: 1 / (sections.length - 1),
    //       end: () => "+=" + container.offsetWidth
    //     }
    // })

    // // Screen-entry
    // const tlScreenEntry = gsap.timeline( {
    //     x: 0,
    //     ease: "none",
    //     scrollTrigger: {
    //         trigger: ".js-screen-entry",
    //         start: "top 30%",
    //         // end: () => "+=2500" + sections.offsetWidth,
    //         end:"+=100%",
    //         scrub: 1,
    //         // snap: 1 / (sections.length - 1),
    //     }
    // });

    // tlScreenEntry.from(".js-screen-entry__layer--one", 1.5, {
    //     x: -140
    // }, '-=1.5')
    // .from(".js-screen-entry__layer--two", 2, {
    //     x: -160,
    // }, '-=2')
    // .from(".js-screen-entry__layer--three", 2, {
    //     x: -180,
    // }, '-=2')
    // .from(".js-screen-entry__layer--four", 1.4, {
    //     x: -200,
    // }, '-=1.4');

    // // Screen-brand
    // const tlScreenBrand = gsap.timeline( {
    //     x: 0,
    //     ease: "none",
    //     scrollTrigger: {
    //         trigger: ".js-screen-brand",
    //         start: "top 30%",
    //         // end: () => "+=2500" + sections.offsetWidth,
    //         end:"+=100%",
    //         scrub: 1,
    //         // snap: 1 / (sections.length - 1),
    //     }
    // });

    // tlScreenBrand.from(".js-screen-brand__layer--one", 1.7, {
    //     x: 220
    // }, '-=1.7')
    // .from(".js-screen-brand__layer--two", 1.5, {
    //     x: 260,
    // }, '-=1.5')
    // .from(".js-screen-brand__layer--three", 1.3, {
    //     x: 280,
    // }, '-=1.3')
    // .from(".js-screen-brand__layer--four", 1.2, {
    //     x: 300,
    // }, '-=1');

    // // Screen-hackerman
    // const tlScreenHackerman = gsap.timeline( {
    //     x: 0,
    //     ease: "none",
    //     scrollTrigger: {
    //         trigger: ".js-screen-hackerman",
    //         start: "top 30%",
    //         // end: () => "+=2500" + sections.offsetWidth,
    //         end:"+=100%",
    //         scrub: 1,
    //         // snap: 1 / (sections.length - 1),
    //     }
    // });

    // tlScreenBrand.from(".js-screen-hackerman__layer--one", 1.7, {
    //     x: 220
    // }, '-=1.7')
    // .from(".js-screen-hackerman__layer--two", 1.5, {
    //     x: 260,
    // }, '-=1.5')
    // .from(".js-screen-hackerman__layer--three", 1.3, {
    //     x: 280,
    // }, '-=1.3');

}

export default { init }