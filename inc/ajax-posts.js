jQuery(document).ready( function( $ ){

    // Получение id страницы
    postsContainer = $('.js-posts-container');

    // при клике на терм фильтрация
    $('.js-category').on('click', function(e) {
        e.preventDefault();
        if ($('.js-category').not(this).hasClass('is-active')) {
            $('.js-category').removeClass('is-active');
            postsContainer.addClass('is-load');
        };
        $(this).toggleClass('is-active');
        get_posts();
    })
    function catID() {
        var catID = $(".js-category.is-active").data('termid');

        return catID;
    }

    function postsCounts() {
        var postsCount = $(".js-posts").data('posts-count');

        return postsCount;
    }
    
    function get_posts(paged) {

        var paged_value = paged,
            postType = $(".js-category").data('type'),
            postTax = $(".js-taxonomy").data('taxonomy');

        var data = {
            action: 'get_make_posts',
            category: catID,
            type: postType,
            paged: paged_value,
            posts_per_page: postsCounts,
            taxonomy: postTax,
        };
        
        jQuery.get( blogUrl.ajax_url, data, function( response ) {
                $('.js-posts-container').html(response);
                const container = document.querySelector('.js-posts-container');
                window.revealInit(container);
            } 
        );

        $( document ).ajaxComplete(function() {
            postsContainer.removeClass('is-load');
        });

    }

});