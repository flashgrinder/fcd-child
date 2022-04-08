import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Draggable } from "gsap/Draggable";

function init() {

    gsap.registerPlugin(ScrollTrigger);

    let sections = gsap.utils.toArray(".screen");
    let container = document.querySelector(".horizontal-container");

    let horizontalScroll = gsap.to(container, {
        x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
        ease: "none",
        scrollTrigger: {
          trigger: container,
          invalidateOnRefresh: true,
          markers: true,
          pin: true,
          scrub: 1,
        //   snap: 1 / (sections.length - 1),
          end: () => "+=" + container.offsetWidth
        }
    })

    const tlScreenEntry = gsap.timeline( {
        x: 0,
        ease: "none",
        scrollTrigger: {
            trigger: ".js-screen-entry",
            start: "top 30%",
            // end: () => "+=2500" + sections.offsetWidth,
            end:"+=100%",
            scrub: 1,
            // snap: 1 / (sections.length - 1),
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
    .from(".js-screen-entry__layer--four", 1.4, {
        x: -200,
    }, '-=1.4');

    const tlScreenBrand = gsap.timeline( {
        x: 0,
        ease: "none",
        scrollTrigger: {
            trigger: ".js-screen-brand",
            start: "top 30%",
            // end: () => "+=2500" + sections.offsetWidth,
            end:"+=100%",
            scrub: 1,
            // snap: 1 / (sections.length - 1),
        }
    });

    tlScreenBrand.from(".js-screen-brand__layer--one", 1.7, {
        x: 220
    }, '-=1.7')
    .from(".js-screen-brand__layer--two", 1.5, {
        x: 260,
    }, '-=1.5')
    .from(".js-screen-brand__layer--three", 1.3, {
        x: 280,
    }, '-=1.3')
    .from(".js-screen-brand__layer--four", 1.2, {
        x: 300,
    }, '-=1');

}

export default { init }