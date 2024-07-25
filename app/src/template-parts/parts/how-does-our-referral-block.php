<div class="wrapper-section rmbt-how-does-our-referral-block-wrapper-section">
   <div class="rmbt-full-width rmbt-how-does-our-referral-block-full-width">
      <div class="rmbt-how-does-our-referral-block-full-width__bg">
         <div class="wrap-img">
            <img
               src="<?php echo get_template_directory_uri() ?>/assets/img/how-does-our-referral-block/how-does-our-referral-block_bg_1.jpg"
               alt="">

         </div>
      </div>

      <section class="rmbt-container rmbt-how-does-our-referral-block">
         <div class="rmbt-how-does-our-referral-block__row">
            <div class="rmbt-how-does-our-referral-block__text">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-how-does-our-referral-block_title')]); ?>
               <div class="font-p">
                  <?php echo rmbt_get_redux_field('rmbt-how-does-our-referral-block_text')?>
               </div>
            </div>

            <div class="rmbt-financing-block__col rmbt-financing-block-wrap-cards">

               <?php get_template_part('template-parts/components/financing_block_card', null, [ 'svg_id'=>'how-does-our-referral_1', 'title'=>'STEP 1', 'subtitle'=>'Submit Your Referral Form', 'text'=>'Fill out our form with your referral information.']); ?>

               <?php get_template_part('template-parts/components/financing_block_card', null, [ 'svg_id'=>'how-does-our-referral_2', 'title'=>'STEP 2', 'subtitle'=>'We Make Content', 'text'=>'A Schroeder Roofing project manager will contact the referral and set up an appointment to inspect the roof. All inspections are free of charge.']); ?>


               <?php get_template_part('template-parts/components/financing_block_card', null, [ 'svg_id'=>'how-does-our-referral_3', 'title'=>'STEP 3', 'subtitle'=>'You get rewarded', 'text'=>'Once the roof installation is replaced and Schroeder Roofing has been paid in full then you will receive your reward.']); ?>

               <div class="button-wrap">
                  <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => 'rmbt-financing-block-button','title' => 'red more']); ?>
               </div>
            </div>



         </div>
      </section>
   </div>
</div>