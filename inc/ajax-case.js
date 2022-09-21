jQuery(document).ready( function( $ ){

    $('.js-case').on('click', function(e) {

        e.preventDefault();

        get_posts(e);

    })
    
    function get_posts(e) {

        var param = $(e.target).attr('data-id-case');

        var data = {
            action: 'get_make_case',
            param: param,
        };
        
        jQuery.get( caseUrl.ajax_case_url, data, function( response ) {
                $('.js-case-container').html(response);
            } 
        );
    }

});