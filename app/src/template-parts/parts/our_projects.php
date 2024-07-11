<div class="wrapper-section">
   <div class="rmbt-full-width rmbt-our-projects-full-width">
      <section class="rmbt-container rmbt-our-projects">
         <div class="rmbt-our-projects__row">
            <?php get_template_part('template-parts/components/title', 'section', ['title' => rmbt_get_redux_field('rmbt-our-projects_section-title')]); ?>
            <p><?php rmbt_get_redux_field('rmbt-our-projects_section-subtitle-1') ?></p>

            <div class="rmbt-our-projects__col">

               <div class="rmbt-our-projects-picture-card">
                  <div class="wrap-img rmbt-our-projects-picture-card__img">
                     <?php echo rmbt_redux_img('rmbt-our-projects_image-1', rmbt_get_redux_field('rmbt-our-projects_imag-1_alt')) ?>
                  </div>
                  <div class="rmbt-our-projects-picture-card__text">Residential</div>
               </div>

            </div>

            <!-- <?php get_template_part('template-parts/components/rmbt_button', null, ['class' => 'rmbt-our-projects-button','title' => 'go to renoteck exteriors']); ?> -->

            <p><?php rmbt_get_redux_field('rmbt-our-projects_section-subtitle-2') ?></p>



            <div class="rmbt-our-projects-video-card">
               <!-- <div class="wrap-img rmbt-our-projects-video-card__img">
                     <?php // echo rmbt_redux_img('rmbt-our-projects_image-1', rmbt_get_redux_field('rmbt-our-projects_imag-1_alt')) ?>
                  </div> -->
            </div>


         </div>
      </section>
   </div>
</div>