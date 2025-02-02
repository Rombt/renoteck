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
            <?php get_template_part( 'template-parts/components/title', 'section', [ 'title' => rmbt_get_redux_field( 'rmbt_leaking-or-damaged-roof_section-title' ) ] ); ?>
         </div>
         <div class="rmbt-leaking-or-damaged-roof-block__text">
            <p class="font-p"><?php echo rmbt_get_redux_field( 'rmbt_leaking-or-damaged-roof_section-text-1' ); ?>
            </p>
         </div>


         <div class="rmbt-leaking-or-damaged-roof-block__title">
            <?php get_template_part( 'template-parts/components/title', 'section', [ 'title' => rmbt_get_redux_field( 'rmbt_leaking-or-damaged-roof_section-subtitle' ) ] ); ?>
         </div>
         <div class="rmbt-leaking-or-damaged-roof-block__text">
            <p class="font-p"><?php echo rmbt_get_redux_field( 'rmbt_leaking-or-damaged-roof_section-text-2' ); ?>
            </p>
         </div>


         <?php get_template_part( 'template-parts/components/card_we_do_block', null, [ 
				'title_id' => 'rmbt-we-aim-block_section-title',
				'text_id' => 'rmbt-we-aim-block_section-text',
				'img_id' => 'rmbt-we-aim-block_img-id',
				'img_alt' => 'rmbt-we-aim-bloc_img-alt',
				'number_circle' => '1',
			] ); ?>






      </section>
   </div>
</div>