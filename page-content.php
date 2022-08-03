<?php /* Template Name: Контентная страница */?>
<?php get_header(); ?>

<?php the_post(); ?>
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

    <!-- Page-wysiwyg -->
    <section class="page-wysiwyg block-padding">
        <div class="page-wysiwyg__body container">
            <div class="page-wysiwyg__content wysiwyg">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <!-- /. Page-wysiwyg -->

<?php get_footer(); ?>