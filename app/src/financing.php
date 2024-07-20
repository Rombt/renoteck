<?php
/* Template Name: Financinge */
?>


<?php get_header(); ?>



<main class="rmbt-financing-page">
   <?php


   get_template_part('template-parts/parts/financing-block');
   get_template_part('template-parts/parts/benefits_block');
   get_template_part('template-parts/parts/finansing_about');
   get_template_part('template-parts/parts/banner-capture-form-block');
   get_template_part('template-parts/parts/testimonials-block');

   get_template_part('template-parts/parts/call-to-action-block');

   ?>
</main>


<?php get_footer();