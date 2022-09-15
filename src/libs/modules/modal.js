import HystModal from 'hystmodal';

function init(container = document) {

    let pageTitle = document.title,
        formTitle = document.querySelector('.js-service-title');

        formTitle.innerHTML = pageTitle;

    let modalForm = document.querySelector('.js-modal-form-wrapper'),
        modalSuccess = document.querySelector('.js-modal-form-success');

    let wpcf7Elm = document.querySelectorAll( '.wpcf7' );

    wpcf7Elm.forEach(function(elem) {

        elem.addEventListener( 'submit', function( event ) {
            alert( "Fire!" );
          }, false );

    });
    

    const modalsForms = new HystModal({
        linkAttributeName: "data-hystmodal",
        catchFocus: true,
        waitTransitions: true,
        backscroll: true,
        afterClose: function(modal){
            modalForm.classList.remove('is-hidden');
            modalSuccess.classList.remove('is-show');
	    },
        // afterClose: function(modal){
        //     // modalWrapperShiftBack();
        // },
    });
        
}
  
export default { init }