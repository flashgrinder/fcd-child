<?php 

    if( wp_doing_ajax() ){
        add_action('wp_ajax_get_make_posts', 'get_make_posts');
        add_action('wp_ajax_nopriv_get_make_posts', 'get_make_posts');
    }

    function get_make_posts($current_cat_id){

        // echo(json_encode( array('status'=>'ok','request_vars'=>$_REQUEST) ));
        $query_data = $_GET;
        $postType = $query_data['type'];
        $paged = ! empty( $query_data[ 'paged' ] ) ? $query_data['paged'] : 1;
        $cat = ! empty( $query_data[ 'category' ] ) ? $query_data['category'] : false;
        // $pageid = ($query_data['pageid']) ? explode(',',$query_data['pageid']) : false;
        $tax_query = array('relation' => 'AND',);

        if ($cat) {
            $bet = array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $cat,
            );
            array_push($tax_query, $bet);
        }

        $current_page = get_query_var('paged');

        $post_list = new WP_Query(array(
            'post_type'  => $postType,
            'post_status' => 'publish',
            'taxonomy' => 'category',
            'paged'          => $paged,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'tax_query'      => $tax_query,
            'suppress_filters' => true
        ));

        if( $post_list->have_posts() ) : 
            while( $post_list->have_posts() ) : $post_list->the_post();

                get_template_part( 'template-parts/template', 'post');

            endwhile;
        endif;
        wp_reset_query();
        wp_die();
}

