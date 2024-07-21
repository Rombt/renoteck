<div class="wrapper-section rmbt-about-us-hero-block-wrapper-section">
   <div class="rmbt-full-width rmbt-about-us-hero-block-full-width">
      <div class="rmbt-about-us-hero-block-full-width__bg">
         <div class="wrap-img">
            <img
               src="<?php echo get_template_directory_uri() ?>/assets/img/about_us_hero_block/about_us_hero_block_bg.jpg"
               alt="">

         </div>
      </div>

      <section class="rmbt-container rmbt-about-us-hero-block">
         <div class="rmbt-about-us-hero-block__row">
            <div class="rmbt-about-us-hero-block__col rmbt-about-us-hero-block__img">

               <div class="wrap-img">
                  <?php echo rmbt_redux_img('about_us_hero_block_img_1', 'about_us_hero_block_img_1-alt') ?>
               </div>

            </div>
            <div class="rmbt-about-us-hero-block__col rmbt-about-us-hero-block__text">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-about_us_hero_block_title')]); ?>
               <div class="rmbt-about-us-hero-block__subtitle">
                  <?php echo rmbt_get_redux_field('rmbt-about_us_hero_block_subtitle', 1)?>
               </div>
               <div class="font-p">
                  <?php echo rmbt_get_redux_field('rmbt-about_us_hero_block_text')?>
               </div>
            </div>



         </div>
      </section>
   </div>
</div>