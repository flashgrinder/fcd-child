<?php

    define('STANDART_DIR', get_stylesheet_directory_uri() . '/assets/');
    define('ROOT_DIR', get_stylesheet_directory_uri());

    // Отключаем админбар
    // if ( ! current_user_can( 'manage_options' ) ) {
    //     show_admin_bar( false );
    // }

    /* Actions */
    include_once(__DIR__ . '/inc/actions.php');
    /* Filters */
    include_once(__DIR__ . '/inc/filters.php');
    /* Post type - Reviews */
    include_once(__DIR__ . '/inc/post-type_reviews.php');
    /* Post type - Services */
    include_once(__DIR__ . '/inc/post-type_services.php');
    /* Post type - Cases */
    include_once(__DIR__ . '/inc/post-type_cases.php');
    /* Custom Functions */
    include_once(__DIR__ . '/inc/custom-functions.php');