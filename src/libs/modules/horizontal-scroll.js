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

    const tl = gsap.timeline( {
        x: 0,
        ease: "none",
        scrollTrigger: {
            trigger: ".screen",
            start: "top 30%",
            // end: () => "+=2500" + sections.offsetWidth,
            end:"+=100%",
            scrub: 1,
            // snap: 1 / (sections.length - 1),
        }
    });

    tl.from(".js-screen-entry__layer--one", 1.5, {
        x: -100
    }, '-=1.5')
    .from(".js-screen-entry__layer--two", 2, {
        x: -120,
    }, '-=2')
    .from(".js-screen-entry__layer--three", 2, {
        x: -160,
    }, '-=2')
    .from(".js-screen-entry__layer--four", 1.4, {
        x: -180,
    }, '-=1.4')

}

export default { init }