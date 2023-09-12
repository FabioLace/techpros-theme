<!doctype html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:600,800,900" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:600,800,900" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
        <!--<script src="https://unpkg.com/swiper@10.2.0/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>-->
        <script src="<?= esc_url( get_template_directory_uri() . '/assets/script/swiper.js' ); ?>"></script><!-- DA USARE IN CASO NON FUNZIONI IL CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>
        <?php wp_body_open();?>
        <div id="page">
            <?php get_template_part( 'template-parts/header/the-header' ); ?>