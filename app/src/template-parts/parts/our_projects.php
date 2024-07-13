<div class="wrapper-section wrapper-section-our-projects">
   <div class="rmbt-full-width rmbt-our-projects-full-width">

      <div class="rmbt-our-projects-full-width__bg">
         <div class="wrap-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/our-projects-block/bg_2.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/our-projects-block/bg_3.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/our-projects-block/bg_1.png" alt="">
         </div>
      </div>

      <section class="rmbt-container rmbt-our-projects">
         <div class="rmbt-our-projects__row">
            <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-our-projects_section-title')]); ?>
            <p><?php echo rmbt_get_redux_field('rmbt-our-projects_section-subtitle-1') ?></p>

            <div class="rmbt-our-projects__col">
               <div class="tabs rmbt-our-projects-tabs">
                  <nav class="tabs__nav">
                     <button type="button" class="tabs__title tabs__title-active"
                        data-tab="residentail">residentail</button>
                     <button type="button" class="tabs__title" data-tab="commercial">commercial</button>
                     <button type="button" class="tabs__title" data-tab="industrial">industrial</button>
                  </nav>
                  <div class="tabs__content">
                     <div class="tabs__body tabs__body-active" data-tab-name="residentail">

                        <div class="rmbt-our-projects-picture-wrap-cards">
                           <svg class="arrow-left">
                              <use
                                 xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow_2">
                              </use>
                           </svg>

                           <div class="rmbt-our-projects-picture-card rmbt-our-projects-second-card left-second-card">
                              <div class="wrap-img rmbt-our-projects-picture-card__img">
                                 <img
                                    src="<?php echo get_template_directory_uri() ?>/assets/img/our-projects-block/our-projects-picture_1.jpg"
                                    alt="">
                              </div>
                              <div class="rmbt-our-projects-picture-card__text">
                                 <h4>snap-look</h4>
                                 <p> Panel system </p>
                              </div>
                           </div>

                           <div class="rmbt-our-projects-picture-card rmbt-our-projects-first-card left-first-card">
                              <div class="wrap-img rmbt-our-projects-picture-card__img">
                                 <img
                                    src="<?php echo get_template_directory_uri() ?>/assets/img/our-projects-block/our-projects-picture_2.jpg"
                                    alt="">
                              </div>
                              <div class="rmbt-our-projects-picture-card__text">
                                 <h4>snap-look</h4>
                                 <p> Panel system </p>
                              </div>
                           </div>

                           <div class="rmbt-our-projects-picture-card rmbt-our-projects-main-card">
                              <div class="wrap-img rmbt-our-projects-picture-card__img">
                                 <img
                                    src="<?php echo get_template_directory_uri() ?>/assets/img/our-projects-block/our-projects-picture_3.jpg"
                                    alt="">
                              </div>
                              <div class="rmbt-our-projects-picture-card__text">
                                 <h4>snap-look</h4>
                                 <p> Panel system </p>
                              </div>
                           </div>

                           <div class="rmbt-our-projects-picture-card rmbt-our-projects-first-card right-first-card">
                              <div class="wrap-img rmbt-our-projects-picture-card__img">
                                 <img
                                    src="<?php echo get_template_directory_uri() ?>/assets/img/our-projects-block/our-projects-picture_4.jpg"
                                    alt="">
                              </div>
                              <div class="rmbt-our-projects-picture-card__text">
                                 <h4>snap-look</h4>
                                 <p> Panel system </p>
                              </div>
                           </div>

                           <div class="rmbt-our-projects-picture-card rmbt-our-projects-second-card right-second-card">
                              <div class="wrap-img rmbt-our-projects-picture-card__img">
                                 <img
                                    src="<?php echo get_template_directory_uri() ?>/assets/img/our-projects-block/our-projects-picture_5.jpg"
                                    alt="">
                              </div>
                              <div class="rmbt-our-projects-picture-card__text">
                                 <h4>snap-look</h4>
                                 <p> Panel system </p>
                              </div>
                           </div>

                           <svg class="arrow-right">
                              <use
                                 xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow_2">
                              </use>
                           </svg>
                        </div>
                        <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => 'rmbt-our-projects-button','title' => 'more case']); ?>

                     </div>
                     <div class="tabs__body" data-tab-name="commercial">
                     </div>
                     <div class="tabs__body" data-tab-name="industrial">

                     </div>
                  </div>
               </div>
               <p><?php echo rmbt_get_redux_field('rmbt-our-projects_section-subtitle-2') ?></p>
               <div class="rmbt-our-projects-video-wrap-cards">
                  <svg class="arrow-left">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow_2">
                     </use>
                  </svg>

                  <div class="wrap-img rmbt-our-projects-video-card">
                     <img
                        src="<?php echo get_template_directory_uri() ?>/assets/img/our-projects-block/our-projects-video_1.jpg"
                        alt="">
                  </div>

                  <div class="wrap-img rmbt-our-projects-video-card">
                     <img
                        src="<?php echo get_template_directory_uri() ?>/assets/img/our-projects-block/our-projects-video_2.jpg"
                        alt="">
                  </div>

                  <div class="wrap-img rmbt-our-projects-video-card">
                     <img
                        src="<?php echo get_template_directory_uri() ?>/assets/img/our-projects-block/our-projects-video_3.jpg"
                        alt="">
                  </div>
                  <div class="button-wrap">
                     <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => 'rmbt-our-projects-button','title' => 'more case']); ?>
                  </div>

                  <svg class="arrow-right">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow_2">
                     </use>
                  </svg>
               </div>
            </div>

         </div>
      </section>
   </div>
</div>