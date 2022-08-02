<?php

    /* Подключение стилей и скриптов */
    add_action( 'wp_enqueue_scripts', function() {

        wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/style.min.css', [], time() );

        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', [], time(), true );

    } );

    add_action( 'after_setup_theme', function(){

        // Регистрируем главное меню
		register_nav_menu('header-menu', 'Меню в шапке');

		// Регистрируем меню в подвале
		register_nav_menu('footer-menu-1', 'Колонка в подвале - Меню');

		register_nav_menu('footer-menu-2', 'Колонка в подвале - Услуги');

		register_nav_menu('footer-menu-3', 'Колонка в подвале - Политики');

		register_nav_menu('footer-menu-4', 'Колонка в подвале - Заказы');

		register_nav_menu('footer-menu-5', 'Колонка в подвале - О нас');

        // Смена логотипа
		add_theme_support('custom-logo');

        /* Добавляем возможность ставить постам миниатюры */
        add_theme_support('post-thumbnails');

        /* Тайтлы старницы ставятся автоматом */
        add_theme_support('title-tag');

        /* Включаем поддержку html5 */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /* Отключаем админбар */
        add_theme_support( 'admin-bar', ['callback' => '__return_false'] );

    });

    add_action('init', function(){ 
  
        register_taxonomy('cats_page', array('page'), array(
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => array(
                'name'              => 'Название Категории',
                'singular_name'     => 'Категория',
                'search_items'      => 'Найти Категорию',
                'all_items'         => 'Все Категории',
                'view_item '        => 'Смотреть Категорию',
                'parent_item'       => 'Родитель Категории',
                'parent_item_colon' => 'Родитель Категория:',
                'edit_item'         => 'Редактировать Категорию',
                'update_item'       => 'Обновить Категорию',
                'add_new_item'      => 'Добавить новую Категорию',
                'new_item_name'     => 'Новое имя Категории',
                'menu_name'         => 'Категории',
            ),
            'show_admin_column'     => true,
            'public'                => true,
            'show_in_nav_menus'     => false, // равен аргументу public
            'show_ui'               => true, // равен аргументу public
            'show_in_menu'          => true, // равен аргументу show_ui
            'show_in_rest'          => true,
            'show_tagcloud'         => true, // равен аргументу show_ui
            'hierarchical'          => true,
            'query_var'             => true,
        ));

    });

    //Добавление "Цитаты" для страниц
    function page_excerpt() {
        add_post_type_support('page', array('excerpt'));
    }
    add_action('init', 'page_excerpt');