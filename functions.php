<?php

    define('STANDART_DIR', get_stylesheet_directory_uri() . '/assets/');
    define('ROOT_DIR', get_stylesheet_directory_uri());

    // Отключаем админбар
    // if ( ! current_user_can( 'manage_options' ) ) {
    //     show_admin_bar( false );
    // }
    // Включаем показ ошибок AJAX
    if( WP_DEBUG && WP_DEBUG_DISPLAY && (defined('DOING_AJAX') && DOING_AJAX) ){
        @ ini_set( 'display_errors', 1 );
    }

    /* Actions */
    include_once(__DIR__ . '/inc/actions.php');
    /* Filters */
    include_once(__DIR__ . '/inc/filters.php');
    /* Ajax-posts */
    include_once(__DIR__ . '/inc/ajax-posts.php');
    /* Ajax-case */
    include_once(__DIR__ . '/inc/ajax-case.php');
    /* Post type - Reviews */
    include_once(__DIR__ . '/inc/post-type_reviews.php');
    /* Post type - Services */
    include_once(__DIR__ . '/inc/post-type_services.php');
    /* Post type - Cases */
    include_once(__DIR__ . '/inc/post-type_cases.php');
    /* Post type - Vacancies */
    include_once(__DIR__ . '/inc/post-type_vacancies.php');
    /* Taxanomies */
    include_once(__DIR__ . '/inc/taxanomies.php');
    /* Custom Functions */
    include_once(__DIR__ . '/inc/custom-functions.php');