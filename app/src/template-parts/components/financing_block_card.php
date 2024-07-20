<div class="rmbt-financing-block-card">
   <svg>
      <use
         xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#<?php echo esc_html($args['svg_id']) ?>">
      </use>
   </svg>
   <div class="blur-block rmbt-financing-block-card__body">
      <h4><?php echo esc_html($args['title']) ?></h4>
      <div class="rmbt-financing-block-card__subtitle"> <?php echo esc_html($args['subtitle']) ?> </div>
      <div class="rmbt-financing-block-card__text"><?php echo esc_html($args['text']) ?></div>
   </div>
</div>