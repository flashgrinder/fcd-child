jQuery(document).ready( function( $ ){

    let modalWindow = $('.js-modal-body');

    $(document).on('click', '.js-case', function(e) {

        e.preventDefault();

        modalWindow.addClass('is-load');

        get_posts_case(e);

    })
    
    function get_posts_case(e) {

        let idCase = $(e.target).attr('data-id-case');

        const data = {
            action: 'get_make_case',
            param: idCase,
        };
        
        jQuery.get( caseUrl.ajax_case_url, data, function( response ) {
                $('.js-case-container').html(response);
                const container = document.querySelector('.js-case-container');
                window.revealInit(container);
            } 
        );

        $( document ).ajaxComplete(function() {
            setTimeout(() => {
                modalWindow.removeClass('is-load');
            }, 1500)
        });
    }

});