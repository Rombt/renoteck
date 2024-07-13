<div class="wrapper-section">
   <div class="rmbt-full-width rmbt-our-services-full-width">
      <div class="bg-decoration"></div>

      <div class="rmbt-our-services-full-width__bg">
         <div class="wrap-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/our-services-block/bg_2.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/our-services-block/bg_1.png" alt="">
         </div>
      </div>


      <section class="rmbt-container rmbt-our-services">
         <div class="rmbt-our-services__row">
            <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-our-services_section-title')]); ?>
            <div class="rmbt-our-services__col rmbt-our-services-card">
               <div class="wrap-img rmbt-our-services-card__img">
                  <a href="#">
                     <?php echo rmbt_redux_img('rmbt-our-services_image-1', rmbt_get_redux_field('rmbt-our-services_imag-1_alt')) ?></a>
               </div>
               <div class="blur-block rmbt-our-services-card__text">Residential</div>
            </div>
            <div class="rmbt-our-services__col rmbt-our-services-card">
               <div class="wrap-img rmbt-our-services-card__img">
                  <a href="#">
                     <?php echo rmbt_redux_img('rmbt-our-services_image-2', rmbt_get_redux_field('rmbt-our-services_imag-2_alt')) ?></a>
               </div>
               <div class="blur-block rmbt-our-services-card__text">Commercial</div>
            </div>
            <div class="rmbt-our-services__col rmbt-our-services-card">
               <div class="wrap-img rmbt-our-services-card__img">
                  <a href="#">
                     <?php echo rmbt_redux_img('rmbt-our-services_image-3', rmbt_get_redux_field('rmbt-our-services_imag-3_alt')) ?>
                  </a>
               </div>
               <div class="blur-block rmbt-our-services-card__text">Industrial</div>
            </div>
            <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => 'rmbt-our-services-button','title' => 'go to renoteck exteriors']); ?>
         </div>
      </section>
   </div>
</div>