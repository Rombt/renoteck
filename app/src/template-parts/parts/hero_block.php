<div class="wrapper-section rmbt-hero-block-wrapper-section">
   <div class="rmbt-full-width rmbt-hero-block">

      <div class="rmbt-hero-block__bg">
         <div class="rmbt-hero-block__overlay"></div>
         <div class="wrap-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero_bg_1.jpg" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero_bg_3.png" alt="">
         </div>
         <div class="bottom-triangle"></div>
      </div>



      <!-- hero-block__row -->
      <div class="rmbt-container">

         <div class="rmbt-hero-block__row">
            <div class="rmbt-hero-block__col rmbt-hero-block-text">
               <!-- <div class="rmbt-hero-block-text__title"> -->
               <h1><?php echo rmbt_get_redux_field('rmbt-hero-block-title') ?></h1>
               <!-- </div> -->
               <div class="rmbt-hero-block-text__subtitle">
                  <?php  echo rmbt_get_redux_field('rmbt-hero-block-subtitle',1) ?>
               </div>
               <div class="rmbt-hero-block-text__button">
                  <?php get_template_part('template-parts/components/rmbt_button', null, ['href' => 'tel:'.rmbt_get_redux_field('rmbt-call-today_number'),'class' => 'click-button','title' => 'CLICK TO CALL']); ?>
                  <?php get_template_part('template-parts/components/rmbt_button', null, ['href' => 'https://www.facebook.com/' . rmbt_get_redux_field('rmbt-facebook_nick'),'class' => 'massage-button','title' => 'MASSAGE ON FACEBOOK']); ?>
               </div>
            </div>
            <div class="rmbt-hero-block__col blur-block rmbt-hero-block__capture-form">
               <?php get_template_part('template-parts/components/capture-form');?>
            </div>
         </div>
      </div>


   </div>
</div>