<!-- Pagination -->
<nav class="pagination js-reveal gs-reveal">
    <div class="pagination__inner">
        <?php   
            echo paginate_links(
                $args = array(
                    // 'base'    => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    // 'total'        => $post_list->max_num_pages,
                    // 'current'      => max( 1, $current_page ),
                    'format'       => '?paged=%#%',
                    'mid_size' => 1,
                    'end_size' => 1,
                    'prev_next' => false,
                    'prev_text' => false,
                    'next_text' => false
            ));
        ?>
    </div>
</nav>
<!-- /. Pagination -->