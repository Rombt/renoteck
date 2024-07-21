<div class="wrapper-section rmbt-our-approach-block-wrapper-section">
   <div class="rmbt-full-width rmbt-our-approach-block-full-width">
      <div class="rmbt-our-approach-block-full-width__bg">
         <div class="wrap-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/about_us-block/about_us_bg_3.jpg" alt="">
         </div>
      </div>

      <section class="rmbt-container rmbt-our-approach-block">
         <div class="rmbt-our-approach-block__row">
            <div class="blur-block rmbt-our-approach-block__col rmbt-our-approach-block__text">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-our-approach-block_title')]); ?>
               <div class="font-p">
                  <?php echo rmbt_get_redux_field('rmbt-our-approach-block_text')?>
               </div>
               <div class="wrap-img">
                  <?php echo rmbt_redux_img('our-approach-block_img_1', '') ?>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>