<div class="wrapper-section we-aim-block-wrapper-section">
   <div class="rmbt-full-width rmbt-we-aim-block-full-width">
      <div class="rmbt-we-aim-block-full-width__bg">
         <div class="wrap-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/we-aim-block/we-aim-block_bg.jpg" alt="">
         </div>
      </div>
      <section class="rmbt-container rmbt-we-aim-block">
         <?php get_template_part('template-parts/components/card-we-do-block', null, [
            'title_id' => 'rmbt-we-aim-block_section-title',
            'text_id' => 'rmbt-we-aim-block_section-text',
            'img_id' => 'rmbt-we-aim-block_img-id',
            'img_alt' => 'rmbt-we-aim-bloc_img-alt',
         ]);
          ?>
      </section>
   </div>
</div>