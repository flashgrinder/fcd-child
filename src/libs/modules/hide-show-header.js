function init() {

    let prevScrollpos = window.pageYOffset;

    window.addEventListener('scroll', () => {

        let currentScrollPos = window.pageYOffset,
            header = document.querySelector('.header');

        if ( currentScrollPos >= 300 ) {

            if( prevScrollpos > currentScrollPos ) {

                header.classList.add('is-show');
                header.classList.remove('is-hide');

            } else {

                header.classList.add('is-hide');
                header.classList.remove('is-show');

            }

        }

        prevScrollpos = currentScrollPos;

    })

}

export default { init }