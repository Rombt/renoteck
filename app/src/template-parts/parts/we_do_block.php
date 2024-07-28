<div class="wrapper-section we-do-block-wrapper-section">
   <div class="rmbt-full-width rmbt-we-do-block-full-width">

      <div class="rmbt-we-do-block-full-width__bg">
         <div class="wrap-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/we-do-block/bg_1.jpg" alt="">
         </div>
      </div>

      <section class="rmbt-container rmbt-we-do-block">

         <?php get_template_part('template-parts/components/card-we-do-block', null, [
         'img_id' => 'rmbt-we-do-block_article-img-id-1',
         'img_alt' => 'rmbt-we-do-block_article-img-alt-1',
         'title_id' => 'rmbt-we-do-block_article-title-1',
         'text_id' => 'rmbt-we-do-block_article-text-1',
         ]);
         ?>
         <?php get_template_part('template-parts/components/card-we-do-block', null, [
         'img_id' => 'rmbt-we-do-block_article-img-id-2',
         'img_alt' => 'rmbt-we-do-block_article-img-alt-2',
         'title_id' => 'rmbt-we-do-block_article-title-2',
         'text_id' => 'rmbt-we-do-block_article-text-2',
         ]);
         ?>
         <?php get_template_part('template-parts/components/card-we-do-block', null, [
         'img_id' => 'rmbt-we-do-block_article-img-id-3',
         'img_alt' => 'rmbt-we-do-block_article-img-alt-3',
         'title_id' => 'rmbt-we-do-block_article-title-3',
         'text_id' => 'rmbt-we-do-block_article-text-3',
         ]);
         ?>

      </section>
   </div>
</div>