<?php

    add_action('init', function(){ 
        register_post_type('reviews', [
            'labels' => [
                'name'               => 'Отзывы',
                'singular_name'      => 'Отзывы',
                'add_new'            => 'Добавить отзыв',
                'add_new_item'       => 'Добавить отзыв',
                'edit_item'          => 'Редактировать отзыв',
                'new_item'           => 'Новый отзыв',
                'view_item'          => 'Посмотреть отзыв',
                'search_items'       => 'Найти отзыв',
                'not_found'          => 'Отзывов не найдено',
                'not_found_in_trash' => 'В корзине не найдено отзывов',
                'parent_item_colon'  => '',
                'menu_name'          => 'Отзывы'
            ],
            'public'             => false,
            'show_ui'            => true,
            'show_in_rest'       => true,
            'menu_position'      => 4,
            'menu_icon'          => 'dashicons-admin-appearance',
            'supports'           => ['title','thumbnail','author','custom-fields','revisions'],
            'has_archive'        => false,
            'hierarchical'        => false,
            'rewrite'             => array('slug' => 'otzyvy', 'with_front' => false),
            'query_var'           => true
        ]);
    
    });