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

    add_action( 'wp_enqueue_scripts', 'ajax_posts_scripts' );

    function ajax_posts_scripts() {
		wp_register_script( 'true_ajax_posts', get_stylesheet_directory_uri() . '/inc/ajax-posts.js', ['jquery'], time(), true );

        $data = [
            'ajax_url' => admin_url( 'admin-ajax.php' )
        ];
        
        wp_add_inline_script( 'true_ajax_posts', 'const blogUrl = ' . wp_json_encode( $data ), 'before' );

        wp_enqueue_script( 'true_ajax_posts' );
        
	}

    add_action( 'wp_enqueue_scripts', 'ajax_cases_scripts' );

    function ajax_cases_scripts() {
		wp_register_script( 'true_ajax_case', get_stylesheet_directory_uri() . '/inc/ajax-case.js', ['jquery'], time(), true );

        $data = [
            'ajax_case_url' => admin_url( 'admin-ajax.php' )
        ];
        
        wp_add_inline_script( 'true_ajax_case', 'const caseUrl = ' . wp_json_encode( $data ), 'before' );

        wp_enqueue_script( 'true_ajax_case' );
        
	}

    add_action( 'wp_head', function() {

        ?>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(49769284, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
        });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/49769284" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

        <?php

    });