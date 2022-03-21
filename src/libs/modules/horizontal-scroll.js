import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

function init() {

    gsap.registerPlugin(ScrollTrigger);

    let sections = gsap.utils.toArray(".screen");
    let container = document.querySelector(".horizontal-container");

    // gsap.to(sections, {
    //     xPercent: -100 * (sections.length - 1),
    //     ease: "none",
    //     scrollTrigger: {
    //         trigger: ".horizontal-container",
    //         pin: true,
    //         scrub: 1,
    //         snap: 1 / (sections.length - 1),
    //         // base vertical scrolling on how wide the container is so it feels more natural.
    //         end: "+=1500",
    //     }
    // });

    gsap.to(container, {
        x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
        ease: "none",
        scrollTrigger: {
          trigger: container,
          invalidateOnRefresh: true,
          pin: true,
          scrub: 1,
          snap: 1 / (sections.length - 1),
          end: () => "+=2500" + sections.offsetWidth
        }
      })


}

export default { init }