<?php 

    if( wp_doing_ajax() ){
        add_action('wp_ajax_get_make_posts', 'get_make_posts');
        add_action('wp_ajax_nopriv_get_make_posts', 'get_make_posts');
    }

    function get_make_posts($current_cat_id){

        // echo(json_encode( array('status'=>'ok','request_vars'=>$_REQUEST) ));
        $query_data = $_GET;
        $postsCount = ! empty( $query_data[ 'posts_per_page' ] ) ? $query_data['posts_per_page'] : 1;
        $postType = ! empty( $query_data[ 'type' ] ) ? $query_data['type'] : false;
        $paged = ! empty( $query_data[ 'paged' ] ) ? $query_data['paged'] : 1;
        $cat = ! empty( $query_data[ 'category' ] ) ? $query_data['category'] : false;
        $tax = ! empty( $query_data[ 'taxonomy' ] ) ? $query_data['taxonomy'] : false;
        // $pageid = ($query_data['pageid']) ? explode(',',$query_data['pageid']) : false;
        $tax_query = array('relation' => 'AND',);

        if ($cat) {
            $bet = array(
                'taxonomy' => $tax,
                'field' => 'id',
                'terms' => $cat,
            );
            array_push($tax_query, $bet);
        }

        $current_page = get_query_var('paged');

        $post_list = new WP_Query(array(
            'posts_per_page' => $postsCount,
            'post_type'  => $postType,
            'post_status' => 'publish',
            // 'taxonomy' => 'category',
            'paged'          => $paged,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'tax_query'      => $tax_query,
            'suppress_filters' => true
        ));

        if( $post_list->have_posts() ) : 
            while( $post_list->have_posts() ) : $post_list->the_post();

                if( $postType == 'post') {
                    get_template_part( 'template-parts/template', 'post');
                }
                if ( $postType == 'vacancies') {
                    get_template_part( 'template-parts/template', 'vacancy');
                }
                if ( $postType == 'cases') {
                    get_template_part( 'template-parts/template', 'case');
                }

            endwhile;
        endif;
        wp_reset_query();
        wp_die();
}

