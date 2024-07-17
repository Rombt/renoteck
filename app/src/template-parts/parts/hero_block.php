<!-- hero-block__row -->
<div class="rmbt-container">
   <div class="rmbt-hero-block__row">
      <div class="rmbt-hero-block__col rmbt-hero-block-text">
         <div class="rmbt-hero-block-text__title">
            <h1><?php echo rmbt_get_redux_field('rmbt-hero-block-title') ?></h1>
         </div>
         <div class="rmbt-hero-block-text__subtitle">
            <?php  echo rmbt_get_redux_field('rmbt-hero-block-subtitle',1) ?>
         </div>
         <div class="rmbt-hero-block-text__button">
            <?php get_template_part('template-parts/components/rmbt_button', null, ['href' => 'tel:'.rmbt_get_redux_field('rmbt-call-today_number'),'class' => 'click-button','title' => 'CLICK TO CALL']); ?>
            <?php get_template_part('template-parts/components/rmbt_button', null, ['href' => 'https://www.facebook.com/' . rmbt_get_redux_field('rmbt-facebook_nick'),'class' => 'massage-button','title' => 'MASSAGE ON FACEBOOK']); ?>
         </div>
      </div>
      <div class="rmbt-hero-block__col blur-block rmbt-hero-block__capture-form">
         <?php get_template_part('template-parts/components/capture-form');?>
      </div>
   </div>
</div>