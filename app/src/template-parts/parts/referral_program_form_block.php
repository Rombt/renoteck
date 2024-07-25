<div class="wrapper-section rmbt-referral-program-form-block-wrapper-section">
   <div class="rmbt-full-width rmbt-referral-program-form-block-full-width">
      <div class="rmbt-referral-program-form-block-full-width__bg">
         <div class="wrap-img">
            <img
               src="<?php echo get_template_directory_uri() ?>/assets/img/referral_program_form_block/referral_program_form_block_bg.jpg"
               alt="">

         </div>
      </div>

      <section class="rmbt-container rmbt-referral-program-form-block">
         <div class="rmbt-referral-program-form-block__row">
            <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-referral-program-form-block_title')]); ?>

            <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-referral-program-form-block_subtitle')]); ?>
            <div class="blur-block rmbt-referral-program-form-block__col  ">
               <?php get_template_part('template-parts/components/capture_form','referral',[
                     'title'=>rmbt_get_redux_field('rmbt-capture-form-block_title'),
                     'subtitle-you'=>rmbt_get_redux_field('rmbt-capture-form-block_subtitle-you',1),
                     'subtitle-their'=>rmbt_get_redux_field('rmbt-capture-form-block_subtitle-their',1),
                     ]);?>
            </div>

         </div>
      </section>
   </div>
</div>