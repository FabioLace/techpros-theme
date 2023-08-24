<?php

    function techpros_register_styles(){
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('techpros-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all');
        wp_enqueue_style('material-icons', 'https://cdn.materialdesignicons.com/5.9.55/css/materialdesignicons.min.css', array(), '5.9.55', 'all');
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2', 'all');
        wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1', 'all');
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10', 'all');
        wp_enqueue_style('techpros-style', get_template_directory_uri() . '/style.css', array('techpros-bootstrap', 'material-icons', 'font-awesome', 'animate-css','swiper-css'), $version, 'all');
    }
    
    add_action('wp_enqueue_scripts', 'techpros_register_styles'); 

    function techpros_custom_scripts(){
        /*wp_enqueue_script('techpros-script', get_template_directory_uri(). '/script.js');*/
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '10', true);
    }

    add_action('wp_enqueue_scripts', 'techpros_custom_scripts');

    // FILTRI E AZIONI PER DISABILITARE GUTENBERG
    add_filter( 'use_block_editor_for_post', '__return_false' );
    add_filter( 'use_widgets_block_editor', '__return_false' );

    add_action( 'wp_enqueue_scripts', function() {
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'global-styles' );
    }, 20 );

