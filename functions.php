<?php
    wp_enqueue_script('jquery');

    function techpros_register_styles(){
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('techpros-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all');
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2', 'all');
        wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1', 'all');
        //wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10', 'all');
        wp_enqueue_style('owl-min', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '2.3.4', 'all');
        wp_enqueue_style('owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), '2.3.4', 'all');        
        wp_enqueue_style('techpros-style', get_template_directory_uri() . '/style.css', array('techpros-bootstrap', 'font-awesome', 'animate-css', 'owl-min', 'owl-theme'), $version, 'all');
    }
    
    add_action('wp_enqueue_scripts', 'techpros_register_styles');

    function include_owl(){
        wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '2.3.4', true);
    }

    add_action('wp_enqueue_scripts', 'include_owl');

    // FILTRI E AZIONI PER DISABILITARE GUTENBERG
    add_filter( 'use_block_editor_for_post', '__return_false' );
    add_filter( 'use_widgets_block_editor', '__return_false' );

    add_action( 'wp_enqueue_scripts', function() {
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'global-styles' );
    }, 20 );

