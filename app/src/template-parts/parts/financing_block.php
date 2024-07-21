<div class="wrapper-section wrapper-section-financing-block">
   <div class="rmbt-full-width rmbt-financing-block-full-width">

      <div class="rmbt-financing-block-full-width__bg">
         <div class="wrap-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/financing-block/bg_1.jpg" alt="">
         </div>
      </div>

      <section class="rmbt-container rmbt-financing-block">
         <div class="rmbt-financing-block__row">
            <div class="rmbt-financing-block__col">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-financing-block_section-title')]); ?>
               <p class="font-p"><?php echo rmbt_get_redux_field('rmbt-financing-block_section-text') ?></p>
            </div>

            <div class="rmbt-financing-block__col rmbt-financing-block-wrap-cards">

               <?php get_template_part('template-parts/components/financing_block_card', null, [ 'svg_id'=>'financing-block_1', 'title'=>'BUY NOW – PAY LATER', 'subtitle'=>'No Payments First 12 Months', 'text'=>'Replace your roof today and don`t pay for up to 12
                        months (O.A.C. is required and fees apply)']); ?>

               <?php get_template_part('template-parts/components/financing_block_card', null, [ 'svg_id'=>'financing-block_2', 'title'=>'EQUAL PAYMENTS', 'subtitle'=>'Up To 60 Equal Payments', 'text'=>'Plan your budget accordingly with equal monthly
                        payments (O.A.C. is required and fees apply)']); ?>


               <?php get_template_part('template-parts/components/financing_block_card', null, [ 'svg_id'=>'financing-block_1', 'title'=>'LOW PAYMENTS', 'subtitle'=>'Low Monthly Payments Plan', 'text'=>'Pay the least possible monthly payment and clear
                        all at any time (O.A.C. is required and fees apply)']); ?>

               <div class="button-wrap">
                  <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => 'rmbt-financing-block-button','title' => 'red more']); ?>
               </div>
            </div>

         </div>
      </section>
   </div>
</div>