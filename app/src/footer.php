<footer>
   <div class="rmbt-full-width rmbt-full-width-footer">
      <section class="rmbt-container rmbt-footer">
         <div class="rmbt-footer__row">


            <!-- <div class="rmbt-footer__col"> -->
            <div class="rmbt-footer__col rmbt-footer__about">

               <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-renoteck-roofing_footer.png" alt="">

               <div class="text">
                  Ohio roofing starts with Elite Roofing. We have various industry-leading systems for each type of
                  roof to provide a solution for all your roofing needs. From new residential roofs, re-roofs, and
                  repairs to shingles and metal to industry-leading commercial roof systems and coatings
               </div>
               <?php // get_template_part('template-parts/components/social_networks'); ?>
               <?php get_template_part('template-parts/components/social_networks', null, [
                        'facebook_id' => 'facebook_2',
                        'instagram_id' => 'instagram_2',
                        'youtube_id' => 'youtube_1',
                        'twitter_id' => 'twitter_1',
                        'class' => 'svg-footer-icons '
                        ]); ?>

            </div>

            <div class="rmbt-footer__col rmbt-footer__nav ">
               <?php if (has_nav_menu('rmbt-footer_nav')) { ?>
               <h3>Links</h3>
               <div class="rmbt-cont-vertical-menu">
                  <div class="menu-icon"><span></span></div>
                  <?php wp_nav_menu(
                        array(
                           'theme_location' => 'footer_nav',
                           'container' => 'nav',
                        )
                     );?>
               </div>
               <?php } ?>
            </div>

            <div class="rmbt-footer__col rmbt-footer__contacts">
               <h3>Get in Touch</h3>
               <ul>
                  <li>
                     <svg>
                        <use
                           xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_2">
                        </use>
                     </svg>
                     <div class="contacts-text">
                        <?php echo rmbt_redux_field_to_ul('rmbt-manager-1-phone'); ?>
                        ,
                        <?php echo rmbt_redux_field_to_ul('rmbt-manager-2-phone'); ?>
                     </div>
                  </li>
                  <li>
                     <svg>
                        <use
                           xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#email_2">
                        </use>
                     </svg>
                     <div class="contacts-text">
                        <?php echo rmbt_redux_field_to_ul('rmbt-manager-1-email'); ?>
                     </div>
                  </li>
                  <li>
                     <svg>
                        <use
                           xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#map_point_2">
                        </use>
                     </svg>
                     <div class="contacts-text">
                        <?php echo rmbt_get_redux_field('rmbt-address', 1) ?>
                     </div>
                  </li>



                  <!-- <span><?php // echo rmbt_get_redux_field('rmbt-address', 1) ?></span>
                  <?php // echo rmbt_redux_field_to_ul('rmbt-manager-3-phone'); ?>
                  <?php // echo rmbt_redux_field_to_ul('rmbt-manager-3-email', 'mailto'); ?> -->
               </ul>
            </div>



            <!-- </div> -->
         </div>
      </section>
      <div class="rmbt-copyright">© 2023 Renoteck Roofing</div>
   </div>
</footer>



</div> <!--  end rmbt-page-wrap  -->
<?php wp_footer(); ?>
</body>

</html>