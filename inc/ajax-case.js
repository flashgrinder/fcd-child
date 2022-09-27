jQuery(document).ready( function( $ ){

    let modalWindow = $('.js-modal-body');

    $('.js-case').on('click', function(e) {

        e.preventDefault();

        modalWindow.addClass('is-load');

        get_posts(e);

    })
    
    function get_posts(e) {

        let param = $(e.target).attr('data-id-case');

        const data = {
            action: 'get_make_case',
            param: param,
        };
        
        jQuery.get( caseUrl.ajax_case_url, data, function( response ) {
                $('.js-case-container').html(response);
            } 
        );

        $( document ).ajaxComplete(function() {
            setTimeout(() => {
                modalWindow.removeClass('is-load');
            }, 1500)
        });
    }

});