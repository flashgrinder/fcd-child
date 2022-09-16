<article class="vacancy__item">
    <div class="vacancy__info">
        <h3 class="vacancy__title title title--medium title--white title--w-bold">
            <?php the_title(); ?>
        </h3>
        <div class="vacancy__descr text text--normal text--white title--w-light">
            <?php the_field('vacancies_descr', $post->ID); ?>
        </div>
        <div class="vacancy__tags">
            <?php 
                $categories = get_the_terms($post->ID, 'cats_vacancies');
                
                if($categories){
                    foreach($categories as $category) {
                        echo '<a href="javascript:;" class="vacancy__tag button button--dark button--small">' . $category->name . '</a>';
                    }
                }
            ?>
        </div>
    </div>
    <div class="vacancy__action">
        <a href="javascript:;" class="vacancy__button button button--primary" data-hystmodal="#vacancy">
            Откликнуться
        </a>
    </div>
</article>