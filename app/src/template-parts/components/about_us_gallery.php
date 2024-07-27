<?php global $rmbt_renoteck_options;
      if (isset($rmbt_renoteck_options[$args['gallery_id']])) {
         $arr_about_us = explode(",", $rmbt_renoteck_options[$args['gallery_id']]);
      } ?>

<div class="blur-block <?php echo $args['gallery_class'] ?>" <?php echo $args['additional_parameters'] ?>>


   <div class="swiper <?php echo $args['swiper_class'] ?>">
      <div class="swiper-wrapper">
         <?php if (!empty($arr_about_us[0])) : ?>
         <?php   foreach ($arr_about_us as $image_id) : ?>
         <div class="swiper-slide">
            <div class="rmbt-about-us-gallery__img wrap-img">
               <?php echo wp_get_attachment_image($image_id, '', false, ['alt' => 'about-us-slider img']) ?>
            </div>
         </div>
         <?php  endforeach;?>
         <?php  endif; ?>
      </div>
   </div>
</div>