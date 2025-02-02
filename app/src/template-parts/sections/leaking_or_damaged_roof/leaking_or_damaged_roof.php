<div class="wrapper-section rmbt-leaking-or-damaged-roof-block-wrapper-section">
   <div class="rmbt-full-width rmbt-leaking-or-damaged-roof-block-full-width">

      <div class="rmbt-leaking-or-damaged-roof-block-full-width__bg">
         <div class="wrap-img">
            <img
               src="<?php echo get_template_directory_uri() ?>/assets/img/leaking_or_damaged_roof/leaking_or_damaged_roof_bg.jpg"
               alt="">
         </div>
      </div>

      <section class="rmbt-container rmbt-leaking-or-damaged-roof-block">
         <div class="rmbt-leaking-or-damaged-roof-block__title">
            <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt_leaking-or-damaged-roof_section-title')]); ?>
         </div>
         <div class="rmbt-leaking-or-damaged-roof-block__text">
            <p class="font-p"><?php echo rmbt_get_redux_field('rmbt_leaking-or-damaged-roof_section-text-1'); ?>
            </p>
         </div>

         <div class="rmbt-leaking-or-damaged-roof-block__title">
            <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt_leaking-or-damaged-roof_section-subtitle')]); ?>
         </div>
         <div class="rmbt-leaking-or-damaged-roof-block__text">
            <p class="font-p"><?php echo rmbt_get_redux_field('rmbt_leaking-or-damaged-roof_section-text-2'); ?> </p>
         </div>

         <!-- <div class="card-wrap-1"> -->
         <div class="card-wrap">
            <svg>
               <use
                  xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#leaking_or_damaged_roof_path_1">
               </use>
            </svg>
            <?php get_template_part('template-parts/components/card_we_do_block', null, [
            'title_id' => '',
            'text_id' => 'rmbt_leaking-or-damaged-roof_text-1',
            'img_id' => 'rmbt_leaking-or-damaged-roof_img-id-1',
            'img_alt' => 'rmbt_leaking-or-damaged-roof_img-alt-1',
            'number_circle'=>'1',
         ]);
         ?>
         </div>
         <!-- <div class="card-wrap-2"> -->
         <div class="card-wrap card-wrap-2">
            <svg>
               <use
                  xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#leaking_or_damaged_roof_path_2">
               </use>
            </svg>
            <?php get_template_part('template-parts/components/card_we_do_block', null, [
            'title_id' => '',
            'text_id' => 'rmbt_leaking-or-damaged-roof_text-2',
            'img_id' => 'rmbt_leaking-or-damaged-roof_img-id-1',
            'img_alt' => 'rmbt_leaking-or-damaged-roof_img-alt-1',
            'number_circle'=>'2',
         ]);
         ?>
         </div>
         <!-- <div class="card-wrap-3"> -->
         <div class="card-wrap card-wrap-3">
            <svg>
               <use
                  xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#leaking_or_damaged_roof_path_3">
               </use>
            </svg>
            <?php get_template_part('template-parts/components/card_we_do_block', null, [
            'title_id' => '',
            'text_id' => 'rmbt_leaking-or-damaged-roof_text-3',
            'img_id' => 'rmbt_leaking-or-damaged-roof_img-id-1',
            'img_alt' => 'rmbt_leaking-or-damaged-roof_img-alt-1',
            'number_circle'=>'3',
         ]);
         ?>
         </div>

         <!-- <div class="card-wrap-4"> -->
         <div class="card-wrap">
            <?php get_template_part('template-parts/components/card_we_do_block', null, [
            'title_id' => '',
            'text_id' => 'rmbt_leaking-or-damaged-roof_text-4',
            'img_id' => 'rmbt_leaking-or-damaged-roof_img-id-1',
            'img_alt' => 'rmbt_leaking-or-damaged-roof_img-alt-1',
            'number_circle'=>'4',
         ]);
         ?></div>
         <!-- </div> -->

         <div class="rmbt-leaking-or-damaged-roof-block__text">
            <p class="font-p"><?php echo rmbt_get_redux_field('rmbt_leaking-or-damaged-roof_section-text-3'); ?> </p>
         </div>

      </section>
   </div>
</div>