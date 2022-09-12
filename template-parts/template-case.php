<!-- Case-card -->
<article class="case-card">
    <header class="case-card__header">
        <div class="case-card__tags">
            <?php 
                $categories = get_the_terms($post->ID, 'cats_cases');
                
                if($categories){
                    foreach($categories as $category) {
                        echo '<a href="javascript:;" class="case-card__tag button button--dark button--tiny">' . $category->name . '</a>';
                    }
                }
            ?>
        </div>
    </header>
    <div class="case-card__body">
        <div class="case-card__pic">
            <?php
                $default_attr = [
                    'class'	=> "case-card__img",
                    'alt'   => get_the_title()
                ];
                
                echo get_the_post_thumbnail( $post->ID, 'large', $default_attr ); ?>
        </div>
        <div class="case-card__text">
            <h2 class="case-card__title title title--medium title--white title--w-light">
                <?php the_title(); ?>
            </h2>
        </div>
    </div>
    <footer class="case-card__footer">
        <div class="case-card__action">
            <a href="javascript:;" class="case-card__button button button--primary">
                Посмотреть кейс
            </a>
        </div>
    </footer>
</article>
<!-- /. Case-card -->