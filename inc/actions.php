<?php

    /* Подключение стилей и скриптов */
    add_action( 'wp_enqueue_scripts', function() {

        wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/style.min.css', [], time() );

        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', [], time(), true );

        wp_register_script( 'ajax', get_stylesheet_directory_uri() . '/inc/ajax.js', ['jquery'], time(), true );

        wp_localize_script( 'ajax', 'gosha', ['ajax_url' => admin_url('admin-ajax.php')] );
        
        wp_enqueue_script( 'ajax' );

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

    //Добавление "Цитаты" для страниц
    add_action('init', function() {
        add_post_type_support('page', array('excerpt'));
    });

    /* Кастомный блок Solutions */
    add_action('acf/init', 'my_acf_init_block_types');
    function my_acf_init_block_types() {
        
        // check function exists
        if( function_exists('acf_register_block_type') ) {
            
            // register a testimonial block
            acf_register_block_type(array(
                'name'				=> 'solutions',
                'title'				=> __('Преимущества'),
                'description'		=> __('Пользовательский блок.'),
                'render_callback'	=> 'my_acf_block_render_callback',
                'category'			=> 'formatting',
                'icon'				=> 'groups',
                'keywords'			=> array( 'solutions', 'quote' ),
            ));
        }
    }

    function my_acf_block_render_callback( $block ) {
        
        // convert name ("acf/testimonial") into path friendly slug ("testimonial")
        $slug = str_replace('acf/', '', $block['name']);
        
        // include a template part from within the "template-parts/block" folder
        if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
            include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
        }
    }

    add_action('wp_ajax_truephone', 'true_ajax');
    add_action('wp_ajax_nopriv_truephone', 'true_ajax');

    function true_ajax() {

        echo 'Привет';
        die;

    }