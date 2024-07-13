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
               <!-- <div class="rmbt-financing-block__body"> -->
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-financing-block_section-title')]); ?>
               <p><?php echo rmbt_get_redux_field('rmbt-financing-block_section-text') ?></p>
               <!-- </div> -->
            </div>

            <div class="rmbt-financing-block__col rmbt-financing-block-wrap-cards">
               <!-- <div class="rmbt-financing-block-wrap-cards"> -->


               <div class="rmbt-financing-block-card">
                  <svg>
                     <use
                        xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#financing-block_1">
                     </use>
                  </svg>

                  <div class="blur-block rmbt-financing-block-card__body">
                     <h4>BUY NOW – PAY LATER</h4>
                     <div class="rmbt-financing-block-card__subtitle"> No Payments First 12 Months </div>
                     <div class="rmbt-financing-block-card__text">Replace your roof today and don`t pay for up to 12
                        months (O.A.C. is required and fees apply)</div>
                  </div>
               </div>
               <div class="rmbt-financing-block-card">
                  <svg>
                     <use
                        xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#financing-block_2">
                     </use>
                  </svg>

                  <div class="blur-block rmbt-financing-block-card__body">
                     <h4>EQUAL PAYMENTS</h4>
                     <div class="rmbt-financing-block-card__subtitle"> Up To 60 Equal Payments </div>
                     <div class="rmbt-financing-block-card__text">Plan your budget accordingly with equal monthly
                        payments (O.A.C. is required and fees apply)</div>
                  </div>
               </div>
               <div class="rmbt-financing-block-card">
                  <svg>
                     <use
                        xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#financing-block_1">
                     </use>
                  </svg>

                  <div class="blur-block rmbt-financing-block-card__body">
                     <h4>LOW PAYMENTS</h4>
                     <div class="rmbt-financing-block-card__subtitle">Low Monthly Payments Plan</div>
                     <div class="rmbt-financing-block-card__text">Pay the least possible monthly payment and clear
                        all at any time (O.A.C. is required and fees apply)</div>
                  </div>
               </div>


               <!-- </div> -->


               <div class="button-wrap">
                  <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => 'rmbt-financing-block-button','title' => 'red more']); ?>
               </div>
            </div>

         </div>
      </section>
   </div>
</div>