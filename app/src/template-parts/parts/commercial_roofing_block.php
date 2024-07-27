<div class="wrapper-section rmbt-commercial-roofing-block-wrapper-section">
   <div class="rmbt-full-width rmbt-commercial-roofing-block-full-width">
      <div class="rmbt-commercial-roofing-block-full-width__bg">
         <div class="wrap-img">
            <img
               src="<?php echo get_template_directory_uri() ?>/assets/img/commercial-roofing-block/commercial-roofing-block_bg.jpg"
               alt="">
         </div>
      </div>

      <?php get_template_part('template-parts/components/about_us_gallery', null, [
         'gallery_id' => 'commercial-roofing-page-gallery-block',
         'gallery_class' => 'rmbt-about-us-gallery',
         'swiper_class' => 'rmbt-about-us-swiper',
         'additional_parameters' => 'data-da=".rmbt-commercial-roofing-block__text, 1280,1"',
         'link_read_more_href' => '',
      ]);
      ?>
      <section class="rmbt-container rmbt-commercial-roofing-block">
         <div class="rmbt-commercial-roofing-block__row">


            <div class="rmbt-commercial-roofing-block__col rmbt-commercial-roofing-block__text">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-commercial-roofing-page-title',1)]); ?>
               <p class="font-p"><?php echo rmbt_get_redux_field('rmbt-commercial-roofing-page-text') ?></p>
               <div class="rmbt-commercial-roofing-block__buttons-block">
                  <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => '','title' => 'click to call']); ?>
                  <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => '','title' => 'get a free estimate']); ?>
               </div>
            </div>

            <div class="rmbt-text-section">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-commercial-roofing-page-subtitle')]); ?>
               <p class="font-p"><?php echo rmbt_get_redux_field('rmbt-commercial-roofing-page-text_2') ?></p>

            </div>

            <div class="rmbt-commercial-roofing-block__col rmbt-commercial-roofing-block__icons-block icons-block">
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