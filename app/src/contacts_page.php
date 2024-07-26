<?php
/* Template Name: Contacts */
?>
<!-- <?php global $rmbt_renoteck_options; ?> -->



<?php get_header(); ?>



<main class="rmbt-contacts-page">


   <div class="wrapper-section rmbt-hero-block-wrapper-section">
      <div class="rmbt-full-width rmbt-hero-block">

         <div class="rmbt-hero-block__bg">
            <div class="rmbt-hero-block__overlay"></div>
            <div class="wrap-img">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero_bg_1.jpg" alt="">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero_bg_3.png" alt="">
            </div>
         </div>

         <div class="rmbt-container">
            <div class="rmbt-hero-block__row">
               <div class="rmbt-cantact-page-col-left">
                  <div class="rmbt-hero-block-text">
                     <h1><?php echo rmbt_get_redux_field('rmbt-contacts-page-title') ?></h1>

                     <a href="tel:<?php echo rmbt_get_redux_field('rmbt-call-today_number') ?>">
                        <svg class='svg-header-icons'>
                           <use
                              xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_1">
                           </use>
                        </svg>
                        <div class="">
                           <p><?php echo rmbt_get_redux_field('rmbt-call-today_title'); ?></p>
                           <p><?php echo rmbt_get_redux_field('rmbt-call-today_number'); ?></p>
                        </div>
                     </a>
                     <a href="https://www.instagram.com/<?php echo rmbt_get_redux_field('rmbt-instagram_nick') ?>">
                        <svg class='svg-header-icons'>
                           <use
                              xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#instagram_1">
                           </use>
                        </svg>
                        <div class="">
                           <p><?php echo rmbt_get_redux_field('rmbt-instagram_title') ?></p>
                           <p><?php echo rmbt_get_redux_field('rmbt-instagram_nick') ?></p>
                        </div>
                     </a>
                     <a href="https://www.facebook.com/<?php echo rmbt_get_redux_field('rmbt-facebook_nick') ?>"">
                        <svg class='svg-header-icons'>
                           <use
                              xlink:href="
                        <?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#facebook_1">
                        </use>
                        </svg>
                        <div class="">
                           <p><?php echo rmbt_get_redux_field('rmbt-facebook_title') ?></p>
                           <p><?php echo rmbt_get_redux_field('rmbt-facebook_nick') ?></p>
                        </div>
                     </a>

                  </div>

                  <div class="rmbt-hero-block-map">
                     <?php echo rmbt_get_redux_field('rmbt-contacts-page-map-iframe',0,1) ?>
                  </div>
               </div>


               <div class="rmbt-cantact-page-col-right">
                  <div class="blur-block rmbt-hero-block__capture-form" data-da=".rmbt-cantact-page-col-left, 1440, 1">
                     <?php get_template_part('template-parts/components/capture_form', 'contacts');?>
                  </div>

                  <div class="rmbt-cantact-page-block-text">
                     <p><?php echo rmbt_get_redux_field('rmbt-contacts-page-title-2') ?></p>
                     <p><?php echo rmbt_get_redux_field('rmbt-contacts-page-subtitle-2') ?></p>
                     <?php get_template_part('template-parts/components/social_networks', null, [
                        'facebook_id' => 'facebook_2',
                        'instagram_id' => 'instagram_2',
                        'youtube_id' => 'youtube_1',
                        'twitter_id' => 'twitter_1',
                        'class' => 'svg-header-icons'
                        ]); ?>
                  </div>
               </div>
            </div>
         </div>


      </div>
   </div>





</main>


<?php get_footer();