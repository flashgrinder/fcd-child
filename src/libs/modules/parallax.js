import {gsap} from "gsap";

function init() {

    let parallaxContainer = document.querySelector('.parallax-container');
    
    let parallaxItems = document.querySelectorAll('.parallax-js');
    
    let fixer = 0.0030;
    
    parallaxContainer.addEventListener("mousemove", function(event){
        
        let pageX =  event.pageX - (parallaxContainer.getBoundingClientRect().width * 0.5);
        let pageY =  event.pageY - (parallaxContainer.getBoundingClientRect().height * 0.5);  
        
        for ( let i = 0; i < parallaxItems.length; i++) {
            let item = parallaxItems[i];
            let speedX = item.getAttribute("data-speed-x");
            let speedY = item.getAttribute("data-speed-y");

            gsap.set(item, {
                x: (item.offsetLeft + pageX * speedX ) * fixer,
                y: (item.offsetTop + pageY * speedY) * fixer,
            });
        }
    });

}

export default { init }