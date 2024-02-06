<?php

    add_action('wp_enqueue_scripts', function(){
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('techpros-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all');
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2', 'all');
        wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1', 'all');
        wp_enqueue_style('techpros-style', get_template_directory_uri() . '/style.css', array('techpros-bootstrap', 'font-awesome', 'animate-css'), $version, 'all');
        wp_enqueue_style('google-fonts-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:600,800,900', array(), null);
        wp_enqueue_style('google-fonts-nunito', 'https://fonts.googleapis.com/css?family=Nunito:600,800,900', array(), null);
        wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10');
        wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array('jquery'), '10', true);
        wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true);
    });

    // REMOVE GUTENBERG
    add_filter( 'use_block_editor_for_post', '__return_false' );
    add_filter( 'use_widgets_block_editor', '__return_false' );
    add_action( 'wp_enqueue_scripts', function() {
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'global-styles' );
    }, 20 );
