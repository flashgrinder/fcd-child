<?php get_header(); ?>

    <!-- Page-404 -->
    <section class="page-404 js-reveal gs-reveal">
        <div class="page-404__outer parallax-container">
            <div class="page-404__pic ">
                <img src="<?php echo STANDART_DIR; ?>img/404/404-bg.svg" class="page-404__img page-404__img--bg parallax-js" data-speed-x="3" data-speed-y="3" alt="">
                <img src="<?php echo STANDART_DIR; ?>img/404/404-board.svg" class="page-404__img page-404__img--board parallax-js" data-speed-x="5" data-speed-y="5" alt="">
                <img src="<?php echo STANDART_DIR; ?>img/404/404-frame.svg" class="page-404__img page-404__img--frame parallax-js" data-speed-x="10" data-speed-y="7" alt="">
                <img src="<?php echo STANDART_DIR; ?>img/404/404-table.svg" class="page-404__img page-404__img--table parallax-js" data-speed-x="15" data-speed-y="9" alt="">
            </div>
            <div class="page-404__body container">
                <div class="page-404__inner parallax-js" data-speed-x="15" data-speed-y="9">
                    <img src="<?php echo STANDART_DIR; ?>img/404/404.svg" alt="" class="page-404__img-404">
                    <h3 class="page-404__title title text--white title--w-light">
                        Извините, страница не найдена
                    </h3>
                    <div class="page-404__action">
                        <a href="<?php echo home_url(); ?>" class="page-404__btn button button--primary">
                            На главную
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ Page-404 -->

<?php get_footer(); ?>