<?php

    add_action('init', function(){ 
        register_post_type('vacancies', [
            'labels' => [
                'name'               => 'Вакансии',
                'singular_name'      => 'Вакансии',
                'add_new'            => 'Добавить вакансию',
                'add_new_item'       => 'Добавить вакансию',
                'edit_item'          => 'Редактировать вакансию',
                'new_item'           => 'Новая вакансия',
                'view_item'          => 'Посмотреть вакансию',
                'search_items'       => 'Найти вакансию',
                'not_found'          => 'Вакансий не найдено',
                'not_found_in_trash' => 'В корзине не найдено вакансий',
                'parent_item_colon'  => '',
                'menu_name'          => 'Вакансии'
            ],
            'public'             => false,
            'show_ui'            => true,
            'show_in_rest'       => true,
            'menu_position'      => 6,
            'menu_icon'          => 'dashicons-buddicons-replies',
            'supports'           => ['title', 'author', 'custom-fields'],
            'has_archive'        => false,
            'hierarchical'        => false,
            'rewrite'             => array('slug' => 'vacancies', 'with_front' => false),
            'query_var'           => true
        ]);
    
    });