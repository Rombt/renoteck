<div class="wrapper-section rmbt-amazing-reward-levels-block-wrapper-section">
   <div class="rmbt-full-width rmbt-amazing-reward-levels-block-full-width">
      <div class="rmbt-amazing-reward-levels-block-full-width__bg">
         <div class="wrap-img">
            <img
               src="<?php echo get_template_directory_uri() ?>/assets/img/amazing-reward-levels-block/amazing-reward-levels-block_1.jpg"
               alt="">

         </div>
      </div>

      <section class="rmbt-container rmbt-amazing-reward-levels-block">
         <div class="rmbt-amazing-reward-levels-block__row">
            <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-amazing-reward-levels-block_title')]); ?>

            <div class="rmbt-financing-block__col rmbt-financing-block-wrap-cards">
               <?php get_template_part('template-parts/components/amazing_reward_levels_card', null, [
                  'title'=>'level 1',
                  'subtitle'=>'you refer', 
                  'number_step'=>'1',   
                  'svg_id'=>'',    
                  'dollars'=>'250$', 
                  'text'=>'gift card',
                  'customer_text'=>'qualified customer'
                  ]); ?>
               <?php get_template_part('template-parts/components/amazing_reward_levels_card', null, [
                  'title'=>'level 2',
                  'subtitle'=>'you refer', 
                  'number_step'=>'3',   
                  'svg_id'=>'',    
                  'dollars'=>'500$', 
                  'text'=>'gift card',
                  'customer_text'=>'qualified customer'
                  ]); ?>
               <?php get_template_part('template-parts/components/amazing_reward_levels_card', null, [
                  'title'=>'level 3',
                  'subtitle'=>'you refer', 
                  'number_step'=>'5',   
                  'svg_id'=>'',    
                  'dollars'=>'1000$', 
                  'text'=>'gift card',
                  'customer_text'=>'qualified customer'
                  ]); ?>
               <?php get_template_part('template-parts/components/amazing_reward_levels_card', null, [
                  'title'=>'Master level',
                  'subtitle'=>'you refer', 
                  'number_step'=>'1',   
                  'svg_id'=>'amazing_reward_levels_arrow',    
                  'dollars'=>'', 
                  'text'=>'vocation for two!',
                  'customer_text'=>'qualified customer'
                  ]); ?>




            </div>

            <div class="rmbt-amazing-reward-levels-block__text">
               <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-amazing-reward-levels-block_subtitle')]); ?>
               <div class="font-p">
                  <?php echo rmbt_get_redux_field('rmbt-amazing-reward-levels-block_text')?>
               </div>
            </div>

         </div>
      </section>
   </div>
</div>