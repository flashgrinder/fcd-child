function initAcc(elem, option){
    document.addEventListener('click', function (e) {
        if (!e.target.matches(elem+' .js-accordion-title')) return;
        else{
            if(!e.target.parentElement.classList.contains('is-active')){
                if(option==true){
                    var elementList = document.querySelectorAll(elem+' .js-accordion-item');
                    Array.prototype.forEach.call(elementList, function (e) {
                        e.classList.remove('is-active');
                    });
                }            
                e.target.parentElement.classList.add('is-active');
            }else{
                e.target.parentElement.classList.remove('is-active');
            }
        }
    });
}

function init() {

    initAcc('.js-accordion', true);

}

export default { init }