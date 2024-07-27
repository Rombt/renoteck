<?php global $rmbt_renoteck_options;
      if (isset($rmbt_renoteck_options['about-us-gallery-block'])) {
         $arr_about_us = explode(",", $rmbt_renoteck_options['about-us-gallery-block']);
      } ?>

<div class="blur-block rmbt-about-us-gallery" data-da=".rmbt-about-us__text, 1280,1">
   <div class="rmbt-about-us-swiper swiper">
      <div class="swiper-wrapper">
         <?php if (!empty($arr_about_us[0])) :
                  foreach ($arr_about_us as $image_id) :
                  ?>
         <div class="swiper-slide">
            <div class="rmbt-about-us-gallery__img wrap-img">
               <?php echo wp_get_attachment_image($image_id, '{3:size}', false, ['alt' => 'about-us-slider img']) ?>
            </div>
         </div>
         <?php
                  endforeach;
                  endif;
                  ?>
      </div>
      <div class="rmbt-about-us-swiper__pagination">
         <svg>
            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow_1">
            </use>
         </svg>
      </div>
   </div>
</div>






<!-- <div class="blur-block rmbt-about-us-gallery" data-da=".rmbt-about-us__text, 1280,1">
         <diw class="rmbt-about-us-gallery__img wrap-img">
            <?php // echo rmbt_redux_img('rmbt-about-us-gallery_image-1', rmbt_get_redux_field('rmbt-about-us-gallery_imag-1_alt')) ?>
         </diw>
         <diw class="rmbt-about-us-gallery__img wrap-img">
            <?php // echo rmbt_redux_img('rmbt-about-us-gallery_image-2', rmbt_get_redux_field('rmbt-about-us-gallery_imag-2_alt')) ?>
         </diw>
         <diw class="rmbt-about-us-gallery__img wrap-img">
            <?php // echo rmbt_redux_img('rmbt-about-us-gallery_image-3', rmbt_get_redux_field('rmbt-about-us-gallery_imag-3_alt')) ?>
         </diw>
         <diw class="rmbt-about-us-gallery__img wrap-img">
            <?php // echo rmbt_redux_img('rmbt-about-us-gallery_image-4', rmbt_get_redux_field('rmbt-about-us-gallery_imag-4_alt')) ?>
         </diw>
         <diw class="rmbt-about-us-gallery__img wrap-img">
            <?php // echo rmbt_redux_img('rmbt-about-us-gallery_image-5', rmbt_get_redux_field('rmbt-about-us-gallery_imag-5_alt')) ?>
         </diw>
         <diw class="rmbt-about-us-gallery__img wrap-img">
            <?php // echo rmbt_redux_img('rmbt-about-us-gallery_image-6', rmbt_get_redux_field('rmbt-about-us-gallery_imag-6_alt')) ?>
         </diw>
         <svg>
            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow_1">
            </use>
         </svg>

      </div> -->