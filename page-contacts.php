<?php /* Template Name: Контакты */?>
<?php get_header(); ?>

    <!-- Info-block -->
    <section class="info-block">
        <div class="info-block__body container">
            <div class="info-block__inner">
                <div class="info-block__text">
                    <h1 class="info-block__heading title title--huge title--white title--w-bold title--indent">
                        <?php the_title(); ?>
                    </h1>
                    <p class="info-block__descr text text--large text--white text--w-light">
                        <?php the_excerpt(); ?>
                    </p>
                    <div class="info-block__actions">
                        <a href="#modal" class="info-block__btn button button--primary">
                            Перезвоните мне
                        </a>
                    </div>
                </div>
                <div class="info-block__pic">
                    <?php
                        $default_attr = [
                            'class'	=> "info-block__img",
                            'alt'   => get_the_title()
                        ];
                                    
                        echo get_the_post_thumbnail( $post->ID, 'full', $default_attr ); 
                    ?>
                </div>
            </div>
            <div class="info-block__decor">
                <svg class="info-block__elips" width="2524" height="1511" viewBox="0 0 2524 1511" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_3418_19793)">
                        <path d="M1216.74 592.381C1548.94 592.381 1818.24 623.42 1818.24 661.709C1818.24 699.998 1548.94 731.038 1216.74 731.038C884.546 731.038 615.245 699.998 615.245 661.709C615.245 623.42 884.546 592.381 1216.74 592.381Z" fill="#E82F84" fill-opacity="0.45"
                        />
                        <path d="M1243.78 688.458C1633.98 584.16 1958.36 529.592 1968.29 566.576C1978.23 603.561 1669.96 718.093 1279.75 822.39C889.546 926.688 565.168 981.256 555.234 944.272C545.299 907.287 853.57 792.755 1243.78 688.458Z" fill="#E82F84" fill-opacity="0.25"
                        />
                    </g>
                    <defs>
                        <filter id="filter0_f_3418_19793" x="0" y="0" width="2523.53" height="1510.85" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="277.5" result="effect1_foregroundBlur_3418_19793" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="info-block__scroll">
                <svg class="info-block__scroll-icon" width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 5.05546V8.66032M7 1C5.4087 1 3.88258 1.74179 2.75736 3.06218C1.63214 4.38258 1 6.17341 1 8.04073V16.4896C1 18.3569 1.63214 20.1478 2.75736 21.4682C3.88258 22.7886 5.4087 23.5303 7 23.5303C8.5913 23.5303 10.1174 22.7886 11.2426 21.4682C12.3679 20.1478 13 18.3569 13 16.4896V8.04073C13 6.17341 12.3679 4.38258 11.2426 3.06218C10.1174 1.74179 8.5913 1 7 1Z"
                    stroke="#F0F6F7" stroke-width="1.10645" stroke-linecap="round" />
                </svg>
                <div class="info-block__scroll-text text text--small text--white text--w-light text--uppercase">
                    Scroll
                </div>
            </div>
        </div>
    </section>
    <!-- /. Info-block -->

    <!-- Contacts -->
    <section class="contacts block-padding">
        <div class="contacts__body">
            <div class="contacts__map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7243a84a15ad470a895dc326337d440c59318542bf96316d7019632d91bf8664&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
            <div class="contacts__inner">
                <div class="contacts__plunk container">
                    <div class="contacts__items">
                        <div class="contacts__info">
                            <div class="contacts__name-info title title--small title--w-light">
                                <svg class="contacts__svg-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.25">
                                        <path d="M13.332 3.33398H6.66536C6.20513 3.33398 5.83203 3.70708 5.83203 4.16732V15.834C5.83203 16.2942 6.20513 16.6673 6.66536 16.6673H13.332C13.7923 16.6673 14.1654 16.2942 14.1654 15.834V4.16732C14.1654 3.70708 13.7923 3.33398 13.332 3.33398Z" stroke="white"
                                        stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.16797 4.16602H10.8346" stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10 14.166V14.1743" stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </svg>
                                Мобильный телефон:
                            </div>
                            <a href="tel:+79648799537" class="contacts__data contacts__data--link title title--pre-medium title--white title--w-light">
                                +7 964 879 9537
                            </a>
                        </div>
                        <div class="contacts__info">
                            <div class="contacts__name-info title title--small title--w-light">
                                <svg class="contacts__svg-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.25">
                                        <path d="M4.16667 3.33398H7.5L9.16667 7.50065L7.08333 8.75065C7.9758 10.5603 9.44039 12.0249 11.25 12.9173L12.5 10.834L16.6667 12.5007V15.834C16.6667 16.276 16.4911 16.6999 16.1785 17.0125C15.866 17.3251 15.442 17.5007 15 17.5007C11.7494 17.3031 8.68346 15.9227 6.38069 13.62C4.07792 11.3172 2.69754 8.25126 2.5 5.00065C2.5 4.55862 2.67559 4.1347 2.98816 3.82214C3.30072 3.50958 3.72464 3.33398 4.16667 3.33398"
                                        stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </svg>
                                Телефон:
                            </div>
                            <a href="tel:+78452398109" class="contacts__data contacts__data--link title title--pre-medium title--white title--w-light">
                                +7 (8452) 39-81-09
                            </a>
                        </div>
                        <div class="contacts__info">
                            <div class="contacts__name-info title title--small title--w-light">
                                <svg class="contacts__svg-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.25">
                                        <path d="M17 3L11.6782 17.7373C11.6423 17.8157 11.5846 17.8821 11.512 17.9287C11.4395 17.9752 11.3551 18 11.2688 18C11.1826 18 11.0982 17.9752 11.0256 17.9287C10.9531 17.8821 10.8954 17.8157 10.8595 17.7373L7.99388 12.0061L2.26271 9.14054C2.18432 9.10462 2.1179 9.04694 2.07133 8.97438C2.02476 8.90181 2 8.81739 2 8.73117C2 8.64494 2.02476 8.56053 2.07133 8.48796C2.1179 8.41539 2.18432 8.35772 2.26271 8.3218L17 3Z"
                                        stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </svg>
                                Адрес:
                            </div>
                            <address class="contacts__data title title--pre-medium title--white title--w-light">
                                Саратов, Чернышевского 153
                            </address>
                        </div>
                        <div class="contacts__info">
                            <svg class="contacts__svg-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.25">
                                    <path d="M15.8333 4.16602H4.16667C3.24619 4.16602 2.5 4.91221 2.5 5.83268V14.166C2.5 15.0865 3.24619 15.8327 4.16667 15.8327H15.8333C16.7538 15.8327 17.5 15.0865 17.5 14.166V5.83268C17.5 4.91221 16.7538 4.16602 15.8333 4.16602Z" stroke="white" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.5 5.83398L10 10.834L17.5 5.83398" stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                            <div class="contacts__name-info title title--small title--w-light">
                                E-mail:
                            </div>
                            <a href="mailto:manager@fcdigital.ru" class="contacts__data contacts__data--link title title--pre-medium title--white title--w-light">
                                manager@fcdigital.ru
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Contacts -->

<?php get_footer(); ?>