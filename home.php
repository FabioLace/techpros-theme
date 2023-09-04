<?php
/**
 * Template Name: Home Page
 *
 */

    get_header();

    $sections = array(
        'hero' => 'hero-page',
        'about-us' => 'about-us-page',
        //'our-services' => 'our-services-page',
        //'process' => 'process-page',
        //'action-statistics' => 'action-statistics-page',
        //'benefits-partners' => 'benefits-partners-page',
        //'testimonials' => 'testimonials-page'
    );

    foreach ($sections as $section => $template_part) {
        get_template_part('template-parts/home/' . $section, $template_part);
    }

    get_footer();
?>
