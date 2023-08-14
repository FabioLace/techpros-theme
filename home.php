<?php
/**
 * Template Name: Home Page
 *
 */

get_header(); ?>

<?php get_template_part( 'template-parts/home/hero', 'page' );?>
<?php get_template_part( 'template-parts/home/about-us', 'page' );?>
<?php get_template_part( 'template-parts/home/services', 'page' );?>
<?php /* get_template_part( 'template-parts/home/team', 'page' ); */ ?>
<?php get_template_part( 'template-parts/home/features-case', 'page' );?>
<?php get_template_part( 'template-parts/home/process', 'page' );?>
<?php get_template_part( 'template-parts/home/statistics', 'page' );?>
<?php get_template_part( 'template-parts/home/benefits-partners', 'page' );?>
<?php get_template_part( 'template-parts/home/testimonials', 'page' );?>
<?php get_template_part( 'template-parts/home/last-posts', 'page' );?>

<?php get_footer(); ?>