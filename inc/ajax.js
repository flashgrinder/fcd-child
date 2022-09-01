// jQuery( function( $ ){

//     $('.form-page__form').submit( function() {
        
//         var form = $(this);

//         $.ajax({
//             type : 'POST',
//             url : gosha.ajax_url,
//             data : form.serialize(),
//             beforeSend : function( xhr) {
//                 form.find('.form-page__btn').val('Отправка...');
//             },
//             success : function( data ) {
//                 alert(data);
//                 form.find('.form-page__btn').val('Готово');
//             }
//         })

//         return false;

//     })

// });

let form = document.querySelector('.form-page__form');
let formResult = document.querySelector('.form-page__result');

form.addEventListener('submit', (e) => {

    e.preventDefault();

    let request = new XMLHttpRequest();

    form.querySelector('.form-page__btn').value = 'Отправка...';

    request.open('POST', gosha.ajax_url, true);

    request.send(new FormData(form));

    request.addEventListener('load', (e) => {
        
        let resp = this.response;
        
        if (this.status >= 200 && this.status < 400) {

            success(this.responseText, this.status);
            form.querySelector('.form-page__btn').value = 'Готово!';

        } else {

            formResult.innerHTML = 'Ошибка отправки данных!';
            // error();

        }
    })

    // request.onerror = function () {
    //     error();
    // };

    request.send();

})