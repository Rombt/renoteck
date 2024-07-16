<?php 
   $arr_cities = [
      'Calgary',
      'Cochrane',
      'Airdrie',
      'De Winton',
      'Chestermere',
      'Red Deer',
      'Okotoks',
      'High River',
      'Edmonton',
      'Spruce Grove',
      'Sherwood Park',
      'Fort Saskatchewan',
      'St. Albert',
      'Brag Creek',
      'Whitecourt',
      'Fort McMurray',
      'Drumheller',
      'Lethbridge',
      'Brooks',
      'Medicine Hat',
      'Canmore',
      'Banff',
      'Rocky Mountain House',
      'Leduc',
   ]
?>



<div class="wrapper-section wrapper-section-service-areas-block">
   <div class="rmbt-full-width rmbt-service-areas-block-full-width">

      <div class="rmbt-service-areas-block-full-width__bg">
         <div class="wrap-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/service-areas-block/bg.jpg" alt="">
         </div>
      </div>

      <section class="rmbt-container rmbt-service-areas-block">
         <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-service-areas-block_section-title')]); ?>
         <div class="rmbt-service-areas-block__row">

            <div class="tabs rmbt-service-areas-tabs">
               <nav data-tabs-titles class="tabs__nav">
                  <button type="button" class="tabs__title tabs__title-active" data-tab="alberta">alberta</button>
                  <button type="button" class="tabs__title" data-tab="britain-columbia">britain-columbia</button>
               </nav>
               <div class="tabs__content">
                  <div class="tabs__body tabs__body-active" data-tab-name="alberta">
                     <?php foreach ($arr_cities as $city) { ?>
                     <div class="blur-block font-p rmbt-service-areas-city-cards">
                        <svg>
                           <use
                              xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#map_point_3">
                           </use>
                        </svg>
                        <h5><?php echo $city ?></h5>
                     </div>
                     <?php  } ?>
                  </div>
                  <div class="tabs__body" data-tab-name="britain-columbia">
                  </div>
               </div>
            </div>


            <div class="blur-block rmbt-call-to-action-block__col">
               <div class="rmbt-call-to-action-block__body">
                  <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-service-areas-block_section-title_2')]); ?>
                  <p class="font-p"><?php echo rmbt_get_redux_field('rmbt-service-areas-block_section-text_2') ?></p>
                  <div class="button-wrap">
                     <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => 'rmbt-call-to-action-block-button','title' => 'get your free quote']); ?>
                  </div>
               </div>
            </div>



         </div>
      </section>
   </div>
</div>