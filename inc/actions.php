<?php

    add_action( 'wp_enqueue_scripts', function() {

        wp_enqueue_style( 'styles-child', get_stylesheet_directory() . '/assets/css/style.min.css', [], time() );

        wp_enqueue_script( 'jquery' );

        wp_enqueue_script( 'scripts-child', get_stylesheet_directory() . '/assets/js/scripts.min.js', [], time(), true );

    } );