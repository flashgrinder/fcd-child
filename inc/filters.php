<?php
    
    /* Убираем тег <p></p> у отрывков */
    remove_filter( 'the_excerpt','wpautop');

    add_filter('wpcf7_autop_or_not', '__return_false');

    // Длина отрывков постов
    add_filter( 'excerpt_length', function($number) {
        return 30;
    });

    // Окончание отрывков постов
    add_filter( 'excerpt_more', function($more_string){
        return '...';
    });

    // Добавляет класс пунктам меню в шапке
    add_filter( 'nav_menu_css_class', function($classes, $item, $args, $depth) {
            
        if($args->theme_location === 'header-menu') {
            $classes[] = 'menu__item header__menu-item';
        }
        
        return $classes;

    }, 10, 4 );

    // Добавляет класс пунктам меню в подвале
    add_filter( 'nav_menu_css_class', function($classes, $item, $args, $depth) {
        
        if($args->theme_location === 'footer-menu-1' || $args->theme_location === 'footer-menu-2' || $args->theme_location === 'footer-menu-3' || $args->theme_location === 'footer-menu-4' || $args->theme_location === 'footer-menu-5') {
            $classes[] = 'menu__item footer__menu-item';
        }
        
        return $classes;

    }, 10, 4 );

    // Добавляет класс ссылкам меню в шапке
    add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {
        
        if($args->theme_location === 'header-menu') {
            $atts['class'] = 'menu__link header__menu-link js-transition-link';
        }
        
        return $atts;

    }, 10, 3);

    // Добавляет класс ссылкам меню в подвале
    add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {
        
        if($args->theme_location === 'footer-menu-1' || $args->theme_location === 'footer-menu-2' || $args->theme_location === 'footer-menu-3' || $args->theme_location === 'footer-menu-4' || $args->theme_location === 'footer-menu-5') {
            $atts['class'] = 'menu__link footer__menu-link js-transition-link';
        }
        
        return $atts;

    }, 10, 3);

    // Добавляет активный класс к пунктам меню
    add_filter('nav_menu_css_class' , function($classes, $item) {

        if ( in_array('current-menu-item', $classes) ){

            $classes[] = 'is-active ';

        }
        return $classes;

    }, 10 , 2);

    // Добавляем класс к подменю в шапке
    add_filter( 'nav_menu_submenu_css_class', function( $classes, $args, $depth ) {

        if ( $args->theme_location == 'header-menu' ) {

            $classes[] = 'header__menu-item';
            $classes[] = 'menu__sub-menu';

        }
    
        return $classes;
    }, 10, 3);

      // Изменить название Записи
    add_filter('post_type_labels_post', function($labels) {

        $new = [
                'name'                  => 'Блог',
                'singular_name'         => 'Пост',
                'add_new'               => 'Добавить пост',
                'add_new_item'          => 'Добавить пост',
                'edit_item'             => 'Редактировать пост',
                'new_item'              => 'Новый пост',
                'view_item'             => 'Просмотреть пост',
                'search_items'          => 'Поиск постов',
                'not_found'             => 'Посты не найдены.',
                'not_found_in_trash'    => 'Посты в корзине не найдены.',
                'parent_item_colon'     => '',
                'all_items'             => 'Все посты',
                'archives'              => 'Архивы постов',
                'insert_into_item'      => 'Вставить в пост',
                'uploaded_to_this_item' => 'Загруженные для этого поста',
                'featured_image'        => 'Миниатюра поста',
                'filter_items_list'     => 'Фильтровать список постов',
                'items_list_navigation' => 'Навигация по списку постов',
                'items_list'            => 'Список постов',
                'menu_name'             => 'Блог',
                'name_admin_bar'        => 'Пост'
            ];

        return (object) array_merge( (array) $labels, $new );

    });