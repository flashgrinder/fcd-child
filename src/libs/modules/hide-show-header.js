let prevScrollpos = window.pageYOffset;

function showHideMenu() {
    
    let currentScrollPos = window.pageYOffset,
        header = document.querySelector('.header');

    if ( currentScrollPos >= 500 ) {

        if( prevScrollpos > currentScrollPos ) {

            header.classList.add('is-show');
            header.classList.remove('is-hide');

        } else {

            header.classList.add('is-hide');
            header.classList.remove('is-show');

        }

    }
    
    prevScrollpos = currentScrollPos;

}

function throttle(callee, timeout) {

    let timer = null
  
    return function perform(...args) {

      if (timer) return
  
      timer = setTimeout(() => {

            callee(...args)

            clearTimeout(timer)
            timer = null
        }, timeout)

    }
}

function init() {

    const throttleShowHideMenu = throttle(showHideMenu, 50);

    window.addEventListener('scroll', throttleShowHideMenu)

}

export default { init }