import HystModal from 'hystmodal';
import axios from 'axios';

function init(container = document) {

    let pageTitle = document.title,
        formTitle = document.querySelector('.js-service-title');

        formTitle.innerHTML = pageTitle;

    let wpcf7Elem = document.querySelectorAll( '.wpcf7-form' );

    wpcf7Elem.forEach(function(elem) {

        const actionUrl = elem.getAttribute("action");
   
        elem.addEventListener( 'submit', function( e ) {
            
            e.preventDefault();
            
            const formData = new FormData(elem);
            
            axios({
                method: 'post',
                url: actionUrl,
                data: formData
            })
            .then(function (response) {
                modalsForms.open('.js-modal-success');
            })
            .catch(function (error) {
                console.log(error);
            });

          }, false );

    });
    

    const modalsForms = new HystModal({
        linkAttributeName: "data-hystmodal",
        catchFocus: true,
        waitTransitions: true,
        backscroll: true,
    });
        
}
  
export default { init }