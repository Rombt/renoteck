<div class="wrapper-section rmbt-about-us-wrapper-section">
   <div class="rmbt-full-width rmbt-about-us-full-width">
      <div class="rmbt-about-us-full-width__bg wrap-img">
         <img src="<?php echo get_template_directory_uri() ?>/assets/img/about_us-block/about_us_bg_3.jpg" alt="">
         <img src="<?php echo get_template_directory_uri() ?>/assets/img/about_us-block/about-us-block__grd.png" alt="">
      </div>

      <div class="blur-block rmbt-about-us-gallery" data-da=".rmbt-about-us__text, 1280,1">
         <diw class="rmbt-about-us-gallery__img wrap-img">
            <?php echo rmbt_redux_img('rmbt-about-us-gallery_image-1', rmbt_get_redux_field('rmbt-about-us-gallery_imag-1_alt')) ?>
         </diw>
         <diw class="rmbt-about-us-gallery__img wrap-img">
            <?php echo rmbt_redux_img('rmbt-about-us-gallery_image-2', rmbt_get_redux_field('rmbt-about-us-gallery_imag-2_alt')) ?>
         </diw>
         <diw class="rmbt-about-us-gallery__img wrap-img">
            <?php echo rmbt_redux_img('rmbt-about-us-gallery_image-3', rmbt_get_redux_field('rmbt-about-us-gallery_imag-3_alt')) ?>
         </diw>
         <diw class="rmbt-about-us-gallery__img wrap-img">
            <?php echo rmbt_redux_img('rmbt-about-us-gallery_image-4', rmbt_get_redux_field('rmbt-about-us-gallery_imag-4_alt')) ?>
         </diw>
         <diw class="rmbt-about-us-gallery__img wrap-img">
            <?php echo rmbt_redux_img('rmbt-about-us-gallery_image-5', rmbt_get_redux_field('rmbt-about-us-gallery_imag-5_alt')) ?>
         </diw>
         <diw class="rmbt-about-us-gallery__img wrap-img">
            <?php echo rmbt_redux_img('rmbt-about-us-gallery_image-6', rmbt_get_redux_field('rmbt-about-us-gallery_imag-6_alt')) ?>
         </diw>
         <svg>
            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow_1">
            </use>
         </svg>

      </div>


      <section class="rmbt-container rmbt-about-us">
         <div class="rmbt-about-us__row">
            <div class="rmbt-about-us__col rmbt-about-us__text">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-about-us_section-title')]); ?>
               <p><?php echo rmbt_get_redux_field('rmbt-about-us_section-text') ?></p>
               <div class="rmbt-about-us__buttons-block">
                  <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => 'about-us-more','title' => 'more about us']); ?>
                  <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => 'about-us-video','title' => 'watch video']); ?>
               </div>
            </div>

            <div class="rmbt-about-us__col rmbt-about-us__icons-block icons-block">
               <div class="icons-block__years icon-block">
                  <div class="icon-block__title">25+</div>
                  <div class="blur-block icon-block__text">
                     Years Of Experience
                  </div>
               </div>
               <div class="icons-block__projects icon-block">
                  <div class="icon-block__title">15+</div>
                  <div class="blur-block icon-block__text">
                     Projects Completed
                  </div>
               </div>
               <div class="icons-block__suport icon-block">
                  <div class="icon-block__title">24<span>/7</span></div>
                  <div class="blur-block icon-block__text">
                     Customer Support
                  </div>
               </div>


            </div>
         </div>
      </section>
   </div>
</div>