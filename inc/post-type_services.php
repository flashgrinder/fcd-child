<?php

    add_action('init', function(){ 
        register_post_type('services', [
            'labels' => [
                'name'               => 'Услуги',
                'singular_name'      => 'Услуги',
                'add_new'            => 'Добавить услугу',
                'add_new_item'       => 'Добавить услугу',
                'edit_item'          => 'Редактировать услугу',
                'new_item'           => 'Новая услуга',
                'view_item'          => 'Посмотреть услугу',
                'search_items'       => 'Найти услугу',
                'not_found'          => 'Услуг не найдено',
                'not_found_in_trash' => 'В корзине не найдено услуг',
                'parent_item_colon'  => '',
                'menu_name'          => 'Услуги'
            ],
            'public'             => true,
            'show_ui'            => true,
            'show_in_rest'       => true,
            'menu_position'      => 4,
            'menu_icon'          => 'dashicons-media-code',
            'supports'           => ['title','editor','thumbnail','author','excerpt','custom-fields','revisions'],
            'has_archive'        => false,
            'hierarchical'        => false,
            'rewrite'             => array('slug' => 'uslugi', 'with_front' => false),
            'query_var'           => true
        ]);
    
    });