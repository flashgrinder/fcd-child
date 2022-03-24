import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Draggable } from "gsap/Draggable";

function init() {

    gsap.registerPlugin(ScrollTrigger);

    let sections = gsap.utils.toArray(".screen");
    let container = document.querySelector(".horizontal-container");
    
    // gsap.to(container, {
    //     x: () => -(container.scrollWidth - document.documentElement.clientWidth) + "px",
    //     ease: "none",
    //     scrollTrigger: {
    //       trigger: container,
    //       invalidateOnRefresh: true,
    //       markers: true,
    //       pin: true,
    //       scrub: 1,
    //       snap: 1 / (sections.length - 1),
    //       end: () => "+=2500" + sections.offsetWidth
    //     }
    // })

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

    // const tl = gsap.timeline({
    //     scrollTrigger: {
    //         trigger:".screen-entry",
    //         scrub: true,
    //         pin:true,
    //         start:"top top",
    //         end:"+=100%"
    //     }
    // });

    // tl.from('.screen-entry__door', 3, {
    //     x: '40px',
    //     // autoAlpha: 0
    // }, '+=1');


    const tl = gsap.timeline( {
        x: 0,
        ease: "none",
        scrollTrigger: {
            trigger: ".screen",
            start: "top center",
            // end: () => "+=2500" + sections.offsetWidth,
            end:"+=100%",
            scrub: 1,
            // snap: 1 / (sections.length - 1),
        }
    });

    tl.from(".screen-entry__door", 1, {
        x: 1000,
        
    }, '-=1')

}

export default { init }