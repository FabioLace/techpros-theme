<!doctype html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat" >
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>
        <?php wp_body_open();?>
        <div id="page">
            <?php get_template_part( 'template-parts/header/the-header' ); ?>
            <!-- POST HEAD -->