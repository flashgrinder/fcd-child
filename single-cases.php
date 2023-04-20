<?php get_header(); ?>

    <?php the_post(); ?>
    <!-- Post -->
    <section class="post block-padding">
        <article class="post__body container">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs" class="breadcrumbs text text--small text--white text--w-light">','</p>' );
                }
            ?>
            <header class="post__header">
                <div class="post__pic">
                    <?php
                        $default_attr = [
                            'class'	=> "post__img",
                            'alt'   => get_the_title()
                        ];
                                    
                        echo get_the_post_thumbnail( $post->ID, 'full', $default_attr ); 
                    ?>
                </div>
                <aside class="post__aside">
                    <div class="post__meta">
                        <?php 
                            $categories = get_the_category();
                            
                            if($categories){
                                foreach($categories as $category) {
                                    echo '<a href="'. get_category_link($category->term_id) . '" class="post__cat text text--small text--white text--w-light">' . $category->cat_name . '</a>';
                                }
                            }
                        ?>
                        <span class="post__post-date text text--small text--white text--w-light">
                            <?php echo get_the_date('j F Y'); ?>
                        </span>
                        <span class="post__time-read text text--small text--white text--w-light">
                            <?php estimated_reading_time(); ?>
                        </span>
                        <span class="post__views text text--small text--white text--w-light">
                            <?php if( get_post_meta( $post->ID, 'views', true ) == null ) { echo '0'; } else { echo get_post_meta( $post->ID, 'views', true ); } ?>
                            <?php echo num_decline(kama_postviews(), 'просмотр, просмотров');  ?>
                        </span>
                    </div>
                </aside>
                <div class="post__info">
                    <h1 class="post__title title title--large title--white title--w-bold title--indent">
                        <?php the_title(); ?>                
                    </h1>
                </div>
            </header>
            <div class="post__content wysiwyg">
                <?php the_content(); ?>
            </div>
            <div class="post__action-case">
                <a href="javascript:;" class="post__button-case button button--primary js-case" data-hystmodal="#case">
                    Посмотреть кейс
                </a>
            </div>
            
        </article>
    </section>
    <!-- /. Post -->

    <!-- Модалка кейсов -->
    <div class="modal modal--case hystmodal js-modal-case" id="case" aria-hidden="true">
        <div class="modal__wrap hystmodal__wrap">
            <div class="modal__body js-modal-body hystmodal__window" role="modal window feedback" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="modal__wrapper-case">
                    <h3 class="modal__title title title--pre-medium title--white title--w-light left js-case-title">
                        <?php the_title(); ?>
                    </h3>
                    <?php if( have_rows('case-content') ): ?>
                        <?php while( have_rows('case-content') ): the_row();

                            $case_content_img_desctop = get_sub_field('case-content_img-desctop');
                            $case_content_img_tablet = get_sub_field('case-content_img-tablet');
                            $case_content_img_mobile = get_sub_field('case-content_img-mobile');

                            ?>
                            <picture class="modal__picture-case">
                                <source media="(max-width: 576px)" srcset="<?php echo esc_url($case_content_img_mobile['url']); ?>">
                                <source media="(max-width: 1024px)" srcset="<?php echo esc_url($case_content_img_tablet['url']); ?>">
                                <img src="<?php echo esc_url($case_content_img_desctop['url']); ?>" class="modal__case-img" alt="<?php echo esc_attr($case_content_img_desctop['alt']); ?>">
                            </picture>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /. Модалка кейсов -->

<?php get_footer(); ?>