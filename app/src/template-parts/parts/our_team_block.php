<div class="wrapper-section rmbt-our-team-block-wrapper-section">
   <div class="rmbt-full-width rmbt-our-team-block-full-width">
      <div class="rmbt-our-team-block-full-width__bg">
         <div class="wrap-img">
            <img
               src="<?php echo get_template_directory_uri() ?>/assets/img/banner-capture-form-block/banner-capture-form-block_bg_1.jpg"
               alt="">

         </div>
      </div>

      <section class="rmbt-container rmbt-our-team-block">
         <div class="rmbt-our-team-block__row">
            <div class="rmbt-our-team-block__text">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-our-team-block_title')]); ?>
               <div class="font-p">
                  <?php echo rmbt_get_redux_field('rmbt-our-team-block_text')?>
               </div>
            </div>



            <!-- > 480px -->
            <div class="rmbt-our-team-block__cards-wrap">
               <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
               <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
               <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
               <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
               <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
               <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
               <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
               <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
            </div>

            <!-- < 480px -->
            <div class="rmbt-testimonials-slider-wrap">
               <div class="button-prev-video rmbt-testimonials-slider__button-prev">
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow_1">
                     </use>
                  </svg>
               </div>
               <div class="rmbt-testimonials-video-swiper swiper rmbt-testimonials-slider">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
                     </div>
                     <div class="swiper-slide">
                        <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
                     </div>
                     <div class="swiper-slide">
                        <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
                     </div>
                     <div class="swiper-slide">
                        <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
                     </div>
                     <div class="swiper-slide">
                        <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
                     </div>
                     <div class="swiper-slide">
                        <?php get_template_part('template-parts/components/rmbt_testimonials_block_card'); ?>
                     </div>
                  </div>
                  <div class="rmbt-testimonials-swiper__pagination"></div>
               </div>
               <div class="button-next-video rmbt-testimonials-slider__button-next">
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow_1">
                     </use>
                  </svg>
               </div>
            </div>

         </div>
      </section>
   </div>
</div>