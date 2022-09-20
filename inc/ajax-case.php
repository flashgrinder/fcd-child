<?php

if( wp_doing_ajax() ){
    add_action('wp_ajax_get_make_case', 'get_make_case');
    add_action('wp_ajax_nopriv_get_make_case', 'get_make_case');
}

function get_make_case($caseID) {

    echo(json_encode( array('status'=>'ok','request_vars'=>$_REQUEST) ));

    $query_data = $_GET;

    $caseID = ! empty( $query_data[ 'param' ] ) ? $query_data['param'] : false;
    
    $args = array(
        'p' => $caseID,
        'post_type' => 'cases',
    );

    $post = new WP_Query($args);

    var_dump($caseID);
    ?>

    <?php while( $post->have_posts() ) : $post->the_post() ?>
        <h3 class="modal__title title title--pre-medium title--white title--w-light left js-case-title">
            <?php the_title(); ?>
        </h3>
        <picture class="modal__picture-case">
            <source media="(max-width: 576px)" srcset="<?php echo STANDART_DIR; ?>img/plugs/case-mobile-1.png">
            <source media="(max-width: 1024px)" srcset="<?php echo STANDART_DIR; ?>img/plugs/case-tablet-1.png">
            <img src="<?php echo STANDART_DIR; ?>img/plugs/case-desctop-1.png" class="modal__case-img" alt="">
        </picture>
        <picture class="modal__picture-case">
            <source media="(max-width: 576px)" srcset="<?php echo STANDART_DIR; ?>img/plugs/case-mobile-2.png">
            <source media="(max-width: 1024px)" srcset="<?php echo STANDART_DIR; ?>img/plugs/case-tablet-2.png">
            <img src="<?php echo STANDART_DIR; ?>img/plugs/case-desctop-2.png" class="modal__case-img" alt="">
        </picture>
        <picture class="modal__picture-case">
            <source media="(max-width: 576px)" srcset="<?php echo STANDART_DIR; ?>img/plugs/case-mobile-3.png">
            <source media="(max-width: 1024px)" srcset="<?php echo STANDART_DIR; ?>img/plugs/case-tablet-3.png">
            <img src="<?php echo STANDART_DIR; ?>img/plugs/case-desctop-3.png" class="modal__case-img" alt="">
        </picture>
    <?php 
        endwhile;
    wp_reset_query();
    wp_die();

} ?>