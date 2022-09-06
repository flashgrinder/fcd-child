jQuery(document).ready( function( $ ){

    // Получение id страницы
    pageid = $('.news-list').data('pageid');

    // $(window).on('load',function(){
    //     get_posts();
    // });

    // при клике на терм фильтрация
    $('.news-list__btn-filter').on('click', function(e) {
        e.preventDefault();
        if ($('.news-list__btn-filter').not(this).hasClass('is-active')) {
            $('.news-list__btn-filter').removeClass('is-active');
        };
        $(this).toggleClass('is-active');
        get_posts();
    })
    function catID() {
        var catID = $(".news-list__btn-filter.is-active").data('termid');
        console.log(catID);
        return catID;
    }

    // клик на пагинацю
    // $(document).on("click",".page-numbers",function(e) {
    //     $('html, body').animate({
    //         scrollTop: $(".news-list").offset().top
    //     }, 100);
    // })
    // $(document).on("click",".page-numbers",function(e){
    //     e.preventDefault();

    //     var url = $(this).data('href');
    //     var paged = url.split('&paged=');
    //     if(~url.indexOf('&paged=')){
    //         paged = url.split('&paged=');
    //     } else {
    //         paged = url.split('/page/');
    //     }
    //     get_posts(paged[1]);
    // });
    
    function get_posts(paged) {

        var paged_value = paged,
            postType = $(this).data('type');

        var data = {
            action: 'get_make_posts',
            category: catID,
            type: postType,
            paged: paged_value,
        };
        
        jQuery.get( blogUrl.ajax_url, data, function( response ) {
                // console.log( 'Получено с сервера: ' + response );

                $('.news-list__items').html(response);
                console.log("Только что, был успешно выполнен ajax-запрос страницы " + blogUrl.ajax_url + ".");
            } 
        );
    }

});