         <article class="rmbt-we-do-card">
            <div class="rmbt-we-do-card__img">
               <div class="rmbt-we-do-card__circle">
                  <?php echo $args['number_circle'] ?>

               </div>
               <img class="rmbt-we-do-card__img-bg img-bg-red"
                  src="<?php echo get_template_directory_uri() ?>/assets/img/we-do-block/img_bg_red.jpg" alt="">
               <img class="rmbt-we-do-card__img-bg img-bg-blue"
                  src="<?php echo get_template_directory_uri() ?>/assets/img/we-do-block/img_bg_blue.jpg" alt="">
               <div class="wrap-img">
                  <?php echo rmbt_redux_img($args['img_id'], $args['img_alt']) ?>
               </div>
            </div>
            <div class="rmbt-we-do-card__article-body">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field($args['title_id'])]); ?>
               <div class="font-p rmbt-we-do-card__article-text">
                  <?php echo rmbt_get_redux_field($args['text_id']) ?>
               </div>
            </div>
         </article>]