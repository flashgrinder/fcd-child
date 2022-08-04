<?php
/* Block Name: Employees */

// get image field (array)


// create id attribute for specific styling
$id = 'solutions-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<!-- Solutions -->
<section class="solutions" id="<?php echo $id; ?>">
    <div class="solutions__items <?php echo $align_class; ?>">
        <?php if( have_rows('solutions_rp') ): ?>
            <?php while( have_rows('solutions_rp') ): the_row(); 

                $solutions_icon = get_sub_field('solutions_icon');
                $solutions_title = get_sub_field('solutions_title');
                $solutions_descr = get_sub_field('solutions_descr');

            ?>
            <article class="solutions__card bg--dark-blue">
                <h3 class="solutions__heading">
                    <span class="solutions__icon">
                        <?php if( !empty( $solutions_icon ) ): ?>
                            <img src="<?php echo esc_url($solutions_icon['url']); ?>" class="solutions__img-icon" alt="<?php echo esc_attr($solutions_icon['alt']); ?>" />
                        <?php endif; ?>
                    </span>
                    <span class="solutions__text title title--pre-medium title--white title--w-light">
                        <?php echo $solutions_title; ?>
                    </span>
                </h3>
                <div class="solutions__descr text text--normal text--white text--w-light">
                    <?php echo $solutions_descr; ?>
                </div>
            </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<!-- /. Solutions -->