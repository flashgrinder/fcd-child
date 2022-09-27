        <!-- Form-page -->
        <section class="form-page block-padding">
            <div class="form-page__body container">
                <div class="form-page__inner bg--dark-blue">
                    <div class="form-page__info">
                        <h2 class="form-page__heading title title--large title--white title--w-bold title--indent">
                            Хочу обсудить проект
                        </h2>
                        <p class="form-page__descr text text--normal text--white text--w-light">
                            Оставьте номер телефона, мы перезвоним и обсудим проект
                        </p>
                    </div>
                    <?php echo do_shortcode( '[contact-form-7 id="679" title="Форма в футере" html_class="form-page__form"]' ); ?>
                </div>
            </div>
        </section>
        <!-- /. Form-page -->

    </main>
    <!-- /. MAIN -->
    
    <!-- Footer -->
    <footer class="footer bg--dark-blue">
        <div class="footer__decor">
            <svg class="footer__svg-decor" width="679" height="679" viewBox="0 0 679 679" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.03">
                    <path d="M339.517 324.544V664.392L165.859 494.468L306.555 356.797L339.517 324.544Z" fill="white" fill-opacity="0.45" />
                    <path d="M419.336 586.254V78.0967L678.997 332.175L419.336 586.254Z" fill="white" fill-opacity="0.45" />
                    <path d="M339.521 0V230.124L117.59 447.24L0 332.177L306.559 32.2533L339.521 0Z" fill="white" fill-opacity="0.45" />
                </g>
            </svg>
        </div>
        <div class="footer__body container">
            <div class="footer__row">
                <a href="<?php echo home_url(); ?>" class="footer__logo-wrap">
                    <div class="footer__logo logo">
                    <?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
                    <?php if( !empty($custom_logo__url[0])) : ?>
                        <img src="<?php echo $custom_logo__url[0]; ?>" alt="Логотип" class="footer__logo-img logo__img">
                    <?php else : ?>
                        <img src="<?php echo STANDART_DIR; ?>img/logo.svg" alt="Логотип" class="footer__logo-img logo__img">
                    <?php endif; ?>
                    </div>
                    <div class="footer__firm-name title title--pre-medium title--white title--w-light">
                        Fincom
                        <br>Digital
                    </div>
                </a>
                <form class="footer__search-form search-form" role="search" method="get" id="searchform" action="./">
                    <div class="search-form__field">
                        <input class="footer__search-form-input search-form__input" type="search" value="" name="s" id="s" placeholder="Что ищем?">
                        <span class="search-form__icon">
                            <svg class="search-form__icon-glass" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.25 12.752L1.5 16.502L5.25 12.752ZM3.375 8.06445C3.375 11.6888 6.31313 14.627 9.9375 14.627C13.5619 14.627 16.5 11.6888 16.5 8.06445C16.5 4.44009 13.5619 1.50195 9.9375 1.50195C6.31313 1.50195 3.375 4.44009 3.375 8.06445Z" stroke="white" stroke-opacity="0.45" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                        </span>
                        <button class="search-form__reset hidden" type="reset">
                            <svg class="search-form__icon-reset" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 3L15 15M15 3L3 15" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="footer__columns">
                <div class="footer__column footer__column--one">
                    <h3 class="footer__title-col title title--medium title--white title--w-bold">
                        Меню
                    </h3>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu-1',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu-nav menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s footer__menu-list menu__list">%3$s</ul>'
                        ]);
                    ?>
                </div>
                <div class="footer__column footer__column--two">
                    <h3 class="footer__title-col title title--medium title--white title--w-bold">
                        Услуги
                    </h3>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu-2',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu-nav menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s footer__menu-list menu__list">%3$s</ul>'
                        ]);
                    ?>
                </div>
                <div class="footer__column footer__column--three">
                    <h3 class="footer__title-col title title--medium title--white title--w-bold">
                        Политики
                    </h3>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu-3',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu-nav menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s footer__menu-list menu__list">%3$s</ul>'
                        ]);
                    ?>
                    <h3 class="footer__title-col title title--medium title--white title--w-bold">
                        Заказы
                    </h3>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu-4',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu-nav menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s footer__menu-list menu__list">%3$s</ul>'
                        ]);
                    ?>
                </div>
                <div class="footer__column footer__column--four">
                    <h3 class="footer__title-col title title--medium title--white title--w-bold">
                        О нас
                    </h3>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu-5',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu-nav menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s footer__menu-list menu__list">%3$s</ul>'
                        ]);
                    ?>
                </div>
            </div>
            <div class="footer__copy">
                <div class="footer__copy-text text text--small text--white text--w-light">
                    <?php echo get_the_date('Y'); ?> Fincom Digital
                </div>
                <div class="footer__copy-text text text--small text--white text--w-light">
                    Все права защищены
                </div>
            </div>
        </div>
    </footer>
    <!-- /. Footer -->

    <!-- Модалка услуг -->
    <div class="modal hystmodal" id="service" aria-hidden="true">
        <div class="modal__wrap hystmodal__wrap">
            <div class="modal__body hystmodal__window" role="modal window service" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="modal__title title title--medium title--white title--w-medium center js-service-title">
                    Интернет-магазин
                </h3>
                <?php echo do_shortcode( '[contact-form-7 id="680" title="Форма услуг" html_class="modal__form"]' ); ?>
            </div>
        </div>
    </div>
    <!-- /. Модалка услуг -->

    <!-- Модалка обратной связи -->
    <div class="modal hystmodal" id="feedback" aria-hidden="true">
        <div class="modal__wrap hystmodal__wrap">
            <div class="modal__body hystmodal__window" role="modal window feedback" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="modal__title title title--medium title--white title--w-medium center">
                    Форма обратной связи
                </h3>
                <?php echo do_shortcode( '[contact-form-7 id="680" title="Форма обратной связи" html_class="modal__form"]' ); ?>
            </div>
        </div>
    </div>
    <!-- /. Модалка обратной связи -->

    <!-- Модалка вакансий -->
    <div class="modal hystmodal" id="vacancy" aria-hidden="true">
        <div class="modal__wrap hystmodal__wrap">
            <div class="modal__body hystmodal__window" role="modal window feedback" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="modal__title title title--medium title--white title--w-medium center">
                    Отклик на вакансию
                </h3>
                <?php echo do_shortcode( '[contact-form-7 id="682" title="Форма отклика на вакансию" html_class="modal__form"]' ); ?>
            </div>
        </div>
    </div>
    <!-- /. Модалка вакансий -->

    <!-- Success -->
    <div class="modal modal--success hystmodal js-modal-success" id="success" aria-hidden="true">
        <div class="modal__wrap hystmodal__wrap">
            <div class="modal__body hystmodal__window" role="modal window feedback" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="modal__wrapper-success">
                    <div class="modal__success-icon">
                        <img src="<?php echo STANDART_DIR; ?>img/upload/check-success.svg" alt="Заявка принята" class="modal__success-img">
                    </div>
                    <div class="modal__success-text text text--normal text--white text--w-light">
                        Спасибо, ваша заявка принята!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. Success -->

    <!-- Модалка кейсов -->
    <div class="modal modal--case hystmodal js-modal-case" id="case" aria-hidden="true">
        <div class="modal__wrap hystmodal__wrap">
            <div class="modal__body js-modal-body hystmodal__window" role="modal window feedback" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="modal__wrapper-case js-case-container">

                </div>
            </div>
        </div>
    </div>
    <!-- /. Модалка кейсов -->
    </div>

    <?php wp_footer(); ?>

</body>
</html>