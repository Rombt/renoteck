<div class="wrapper-section we-do-block-wrapper-section">
   <div class="rmbt-full-width rmbt-we-do-block-full-width">

      <div class="rmbt-we-do-block-full-width__bg">
         <div class="wrap-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/we-do-block/bg_1.jpg" alt="">
         </div>
      </div>

      <section class="rmbt-container rmbt-we-do-block">
         <article class="rmbt-we-do-block__row">
            <div class="rmbt-we-do-block__img">
               <img class="rmbt-we-do-block__img-bg img-bg-red"
                  src="<?php echo get_template_directory_uri() ?>/assets/img/we-do-block/img_bg_red.jpg" alt="">
               <img class="rmbt-we-do-block__img-bg img-bg-blue"
                  src="<?php echo get_template_directory_uri() ?>/assets/img/we-do-block/img_bg_blue.jpg" alt="">
               <div class="wrap-img">
                  <?php echo rmbt_redux_img('rmbt-we-do-block_article-img-id-1', 'rmbt-we-do-block_article-img-alt-1') ?>
               </div>
            </div>
            <div class="rmbt-we-do-block__article-body">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-we-do-block_article-title-1')]); ?>
               <div class="font-p rmbt-we-do-block__article-text">
                  <?php echo rmbt_get_redux_field('rmbt-we-do-block_article-text-1') ?>
               </div>
            </div>
         </article>

         <article class="rmbt-we-do-block__row ">
            <div class="rmbt-we-do-block__article-body flex-order-body">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-we-do-block_article-title-2')]); ?>
               <div class="font-p rmbt-we-do-block__article-text">
                  <?php echo rmbt_get_redux_field('rmbt-we-do-block_article-text-2') ?>
               </div>
            </div>
            <div class="rmbt-we-do-block__img flex-order-img">
               <img class="rmbt-we-do-block__img-bg img-bg-red"
                  src="<?php echo get_template_directory_uri() ?>/assets/img/we-do-block/img_bg_red.jpg" alt="">
               <img class="rmbt-we-do-block__img-bg img-bg-blue"
                  src="<?php echo get_template_directory_uri() ?>/assets/img/we-do-block/img_bg_blue.jpg" alt="">
               <div class="wrap-img">
                  <?php echo rmbt_redux_img('rmbt-we-do-block_article-img-id-2', 'rmbt-we-do-block_article-img-alt-2') ?>
               </div>
            </div>

         </article>

         <article class="rmbt-we-do-block__row">
            <div class="rmbt-we-do-block__img">
               <img class="rmbt-we-do-block__img-bg img-bg-red"
                  src="<?php echo get_template_directory_uri() ?>/assets/img/we-do-block/img_bg_red.jpg" alt="">
               <img class="rmbt-we-do-block__img-bg img-bg-blue"
                  src="<?php echo get_template_directory_uri() ?>/assets/img/we-do-block/img_bg_blue.jpg" alt="">
               <div class="wrap-img">
                  <?php echo rmbt_redux_img('rmbt-we-do-block_article-img-id-3', 'rmbt-we-do-block_article-img-alt-3') ?>
               </div>
            </div>
            <div class="rmbt-we-do-block__article-body">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-we-do-block_article-title-3')]); ?>
               <div class="font-p rmbt-we-do-block__article-text">
                  <?php echo rmbt_get_redux_field('rmbt-we-do-block_article-text-3') ?>
               </div>
            </div>
         </article>
      </section>
   </div>
</div>