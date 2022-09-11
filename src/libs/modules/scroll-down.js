let btnScrollDown = document.querySelector('.js-scroll-down');

function scrollDown() {
    window.scrollBy(0, window.innerHeight, {behavior: 'smooth'});
}

function init() {
      
    btnScrollDown.addEventListener('click', scrollDown);

}

export default { init }