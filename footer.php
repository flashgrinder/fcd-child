        <!-- Form-page -->
        <section class="form-page  block-padding">
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
                    <form method="post" class="form-page__form invalid" action="">
                        <div class="form-page__fields">
                            <div class="form-page__field">
                                <p class="form-page__field-text text text--small text--light-gray text--w-light">
                                    Введите номер телефона
                                </p>
                                <input type="tel" name="phone" class="form-page__input" placeholder="+7 (999) - 888 - 77 - 66">
                                <input type="hidden" name="action" value="truephone">
                                <span class="wpcf7-not-valid-tip" aria-hidden="true">Поле обязательно для заполнения.</span>
                            </div>
                            <div class="form-page__actions">
                                <input type="submit" value="Отправить" class="form-page__btn button button--primary button--form">
                                <span class="wpcf7-spinner"></span>
                            </div>
                        </div>
                        <p class="form-page__protect">
                            <span class="form-page__icon-protect">
                                <svg class="form-page__shield-protect" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.17238 5.44959C9.35266 5.6257 9.35266 5.91124 9.17238 6.08736L6.71025 8.49253C6.52997 8.66864 6.23767 8.66864 6.05738 8.49253L4.82632 7.28994C4.64604 7.11383 4.64604 6.82829 4.82632 6.65217C5.00661 6.47606 5.29891 6.47606 5.47919 6.65217L6.38382 7.53587L8.51951 5.44959C8.69979 5.27347 8.99209 5.27347 9.17238 5.44959Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.23105 2.10382C7.08025 2.0573 6.91845 2.0573 6.76765 2.10382L2.62722 3.38108C2.25926 3.49459 2.03428 3.85679 2.10114 4.22804L2.74983 7.83006C2.98784 9.15163 3.67858 10.3364 4.79155 11.0172C5.20042 11.2673 5.62649 11.5007 6.02343 11.6703C6.43002 11.844 6.76328 11.9317 6.99935 11.9317C7.23542 11.9317 7.56868 11.844 7.97527 11.6703C8.37221 11.5007 8.79828 11.2673 9.20715 11.0172C10.3201 10.3364 11.0109 9.15163 11.2489 7.83007L11.8976 4.22804C11.9644 3.85679 11.7394 3.49459 11.3715 3.38108L7.23105 2.10382ZM6.48962 1.24375C6.82137 1.14141 7.17733 1.14141 7.50908 1.24375L11.6495 2.52101C12.459 2.77073 12.954 3.56757 12.8069 4.38431L12.1582 7.98634C11.8859 9.49838 11.0804 10.9355 9.69716 11.7817C9.26713 12.0447 8.79887 12.3029 8.34517 12.4967C7.90112 12.6864 7.42743 12.8337 6.99935 12.8337C6.57127 12.8337 6.09757 12.6864 5.65353 12.4967C5.19983 12.3029 4.73157 12.0447 4.30154 11.7817C2.91828 10.9355 2.11281 9.49838 1.8405 7.98634L1.1918 4.38431C1.04472 3.56757 1.53967 2.77073 2.34919 2.52101L6.48962 1.24375Z" fill="white"/>
                                </svg>
                            </span>
                            <span class="form-page__text-protect text text--small text--white text--w-light">
                                Ваши данные находятся  под защитой
                            </span> 
                        </p>
                        <div class="wpcf7-response-output" aria-hidden="true">
                            Одно или несколько полей содержат ошибочные данные. Пожалуйста, проверьте их и попробуйте ещё раз.
                        </div>
                    </form>
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

    <?php wp_footer(); ?>

</body>
</html>