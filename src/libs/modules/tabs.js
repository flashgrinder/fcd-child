function init() {

    let tabTriggerBtns = document.querySelectorAll('.tabs__button');

    tabTriggerBtns.forEach(function(tabTriggerBtn, index) {

        tabTriggerBtn.addEventListener('click', function() {

            let currentTabData = document.querySelector('.tabs__content[data-tab-content="' + this.dataset.tabTrigger + '"]');

            document.querySelector('.tabs__content.is-open').classList.remove('is-open');
            document.querySelector('.tabs__button.is-active').classList.remove('is-active');
            currentTabData.classList.add('is-open');
            this.classList.add('is-active');

        });
    });

}

export default { init }