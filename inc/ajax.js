jQuery( function( $ ){

    $('.form-page__form').submit( function() {
        
        var form = $(this);

        $.ajax({
            type : 'POST',
            url : gosha.ajax_url,
            data : form.serialize(),
            beforeSend : function( xhr) {
                form.find('.form-page__btn').val('Отправка...');
            },
            success : function( data ) {
                alert(data);
                form.find('.form-page__btn').val('Готово');
            }
        })

        return false;

    })

});