<div class="wrapper-section wrapper-section-call-to-action-block">
   <div class="rmbt-full-width rmbt-call-to-action-block-full-width">

      <div class="rmbt-call-to-action-block-full-width__bg">
         <div class="wrap-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/call-to-action-block/bg_1.jpg" alt="">
         </div>
      </div>

      <section class="rmbt-container rmbt-call-to-action-block">
         <div class="rmbt-call-to-action-block__row">
            <div class="blur-block rmbt-call-to-action-block__col">
               <div class="rmbt-call-to-action-block__body">
                  <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-call-to-action-block_section-title')]); ?>
                  <p class="font-p"><?php echo rmbt_get_redux_field('rmbt-call-to-action-block_section-text') ?></p>
                  <div class="button-wrap">
                     <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => 'rmbt-call-to-action-block-button','title' => 'get your free quote']); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>