<?php

    if( wp_doing_ajax() ){
        add_action('wp_ajax_get_make_case', 'get_make_case');
        add_action('wp_ajax_nopriv_get_make_case', 'get_make_case');
    }

    function get_make_case($caseID) {

        $query_data = $_GET;

        $caseID = ! empty( $query_data[ 'param' ] ) ? $query_data['param'] : false;
        
        $args = array(
            'p' => $caseID,
            'post_type' => 'cases',
        );

        $post = new WP_Query($args);

        ?>

        <?php while( $post->have_posts() ) : $post->the_post() ?>
            <h3 class="modal__title title title--pre-medium title--white title--w-light left js-case-title js-reveal gs-reveal">
                <?php the_title(); ?>
            </h3>
            <?php if( have_rows('case-content') ): ?>
                <?php while( have_rows('case-content') ): the_row();

                    $case_content_img_desctop = get_sub_field('case-content_img-desctop');
                    $case_content_img_tablet = get_sub_field('case-content_img-tablet');
                    $case_content_img_mobile = get_sub_field('case-content_img-mobile');

                    ?>
                    <picture class="modal__picture-case js-reveal gs-reveal">
                        <source media="(max-width: 576px)" srcset="<?php echo esc_url($case_content_img_mobile['url']); ?>">
                        <source media="(max-width: 1024px)" srcset="<?php echo esc_url($case_content_img_tablet['url']); ?>">
                        <img src="<?php echo esc_url($case_content_img_desctop['url']); ?>" class="modal__case-img" alt="<?php echo esc_attr($case_content_img_desctop['alt']); ?>">
                    </picture>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php 
            endwhile;
        wp_reset_query();
        wp_die();

    } ?>