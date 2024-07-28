<div class="wrapper-section new-roof-construction-block-wrapper-section">
   <div class="rmbt-full-width rmbt-new-roof-construction-block-full-width">

      <div class="rmbt-new-roof-construction-block-full-width__bg">
         <div class="wrap-img">
            <img
               src="<?php echo get_template_directory_uri() ?>/assets/img/new-roof-construction-block/new-roof-construction-block_bg.jpg"
               alt="">
         </div>
      </div>

      <section class="rmbt-container rmbt-new-roof-construction-block">
         <div class="rmbt-new-roof-construction-block__title">
            <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-new-roof-construction-block_section-title')]); ?>
         </div>
         <div class="rmbt-new-roof-construction-block__text">
            <p class="font-p"><?php echo rmbt_get_redux_field('rmbt-new-roof-construction-block_section-text'); ?> </p>
         </div>
         <div class="tabs rmbt-new-roof-construction-tabs">
            <nav data-tabs-titles class="tabs__nav">
               <button type="button" class="tabs__title tabs__title-active" data-tab="TPO">TPO</button>
               <button type="button" class="tabs__title" data-tab="EPDM">EPDM</button>
               <button type="button" class="tabs__title" data-tab="PVC">PVC</button>
               <button type="button" class="tabs__title" data-tab="BUR">BUR</button>
               <button type="button" class="tabs__title" data-tab="SBS">SBS</button>
            </nav>
            <div class="tabs__content">
               <div class="tabs__body tabs__body-active" data-tab-name="TPO">

               </div>
               <div class="tabs__body" data-tab-name="EPDM">

               </div>
               <div class="tabs__body" data-tab-name="PVC">

               </div>
               <div class="tabs__body" data-tab-name="BUR">

               </div>
               <div class="tabs__body" data-tab-name="SBS">

               </div>
            </div>
         </div>


      </section>



   </div>
</div>