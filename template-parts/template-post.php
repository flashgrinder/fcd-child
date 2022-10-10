<article class="news-list__item js-reveal gs-reveal">
    <picture class="news-list__pic">
        <?php
            $default_attr = [
                'class'	=> "news-list__thumb",
                'alt'   => get_the_title()
            ];
            
            echo get_the_post_thumbnail( $post->ID, 'medium', $default_attr ) ?>
    </picture>
    <aside class="news-list__aside">
        <div class="news-list__meta">
            <div class="news-list__meta-wrap">
                <?php 
                    $categories = get_the_category();
                    
                    if($categories){
                        foreach($categories as $category) {
                            echo '<a href="'. get_category_link($category->term_id) . '" class="news-list__cat text text--small text--white text--w-light">' . $category->cat_name . '</a>';
                        }
                    }
                ?>
                <span class="news-list__post-date text text--small text--white text--w-light">
                    <?php echo get_the_date('j F Y'); ?>
                </span>
            </div>
            <div class="news-list__meta-wrap">
                <span class="news-list__time-read text text--small text--white text--w-light">
                    <?php estimated_reading_time(); ?>
                </span>
                <span class="news-list__views text text--small text--white text--w-light">
                    <?php if( get_post_meta( $post->ID, 'views', true ) == null ) { echo '0'; } else { echo get_post_meta( $post->ID, 'views', true ); } ?>
                    <?php echo num_decline(kama_postviews(), 'просмотр, просмотров');  ?>
                </span>
            </div>
        </div>
        <div class="news-list__text">
            <h2 class="news-list__title title title--medium title--white title--w-bold title--indent">
                <?php the_title(); ?>
            </h2>
            <p class="news-list__excerpt text text--white text--normal text--w-light">
                <?php the_excerpt(); ?>
            </p>
        </div>
        <a href="<?php the_permalink(); ?>" class="news-list__more link-secondary js-transition-link">
            <span class="news-list__more-text">
                Читать полностью
            </span> 
            <span class="news-list__more-icon">
                <svg class="news-list__more-icon link-secondary__arrow-secondary" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5V3.5ZM16.3536 4.35355C16.5488 4.15829 16.5488 3.84171 16.3536 3.64645L13.1716 0.464466C12.9763 0.269204 12.6597 0.269204 12.4645 0.464466C12.2692 0.659728 12.2692 0.976311 12.4645 1.17157L15.2929 4L12.4645 6.82843C12.2692 7.02369 12.2692 7.34027 12.4645 7.53553C12.6597 7.7308 12.9763 7.7308 13.1716 7.53553L16.3536 4.35355ZM1 4.5H16V3.5H1V4.5Z"/>
                </svg>
            </span>
        </a>
    </aside>
</article>