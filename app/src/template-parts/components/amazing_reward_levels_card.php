<div class="blur-block rmbt-amazing-reward-levels-block-card">



   <div class="rmbt-amazing-reward-levels-block-card__level">
      <h4 class="section-title"><?php echo esc_html($args['title']) ?></h4>
      <div class="rmbt-amazing-reward-levels-block-card__subtitle font-p"> <?php echo esc_html($args['subtitle']) ?>
      </div>
      <div class="number-step">
         <div class="rmbt-amazing-reward-levels-block-card__number-step number-step__body">
            <?php echo esc_html($args['number_step']) ?>
         </div>
      </div>
      <div class="rmbt-amazing-reward-levels-block-card__footer font-p">
         <?php echo esc_html($args['customer_text']) ?>
      </div>
   </div>

   <div class="rmbt-amazing-reward-levels-block-card__dollars">

      <div class="rmbt-amazing-reward-levels-block-card__number">
         <?php if ($args['svg_id'] != '') {?>
         <svg>
            <use
               xlink:href="
         <?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#<?php echo esc_attr($args['svg_id']) ?>">
            </use>
         </svg>
         <?php }else{ echo esc_html($args['dollars']); }?>
      </div>



      <div class="rmbt-amazing-reward-levels-block-card__text"><?php echo esc_html($args['text']) ?>
      </div>
   </div>


</div>