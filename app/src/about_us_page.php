<?php
/* Template Name: About Us */
?>


<?php get_header(); ?>



<main class="rmbt-about-us-page">
   <?php

      get_template_part('template-parts/parts/about_us_hero_block');
      get_template_part('template-parts/parts/our-approach-block');
      get_template_part('template-parts/parts/how-did-we-get-here-block');
      get_template_part('template-parts/parts/our_team_block');

   ?>
</main>


<?php get_footer();