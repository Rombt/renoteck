<div class="wrapper-section rmbt-about-us-wrapper-section">
   <div class="rmbt-full-width rmbt-about-us-full-width">
      <div class="rmbt-about-us-full-width__bg wrap-img">
         <img src="<?php echo get_template_directory_uri() ?>/assets/img/about_us-block/about_us_bg_3.jpg" alt="">
         <img src="<?php echo get_template_directory_uri() ?>/assets/img/about_us-block/about-us-block__grd.png" alt="">
      </div>



      <?php get_template_part('template-parts/components/rmbt-about-us-gallery', null, [
      'title' => '',
      'text' => '',
      'tag-img' => '',
      'link_read_more_href' => '',
      ]);
       ?>


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