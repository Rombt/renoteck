<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="https://gmpg.org/xfn/11">

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>
   <?php // get_template_part('template-parts/components/debug-grid');?>

   <div class="rmbt-page-wrap">

      <div class="wrapper-section">
         <div class="rmbt-full-width rmbt-hero-block">
            <div class="rmbt-hero-block__overlay"></div>
            <div class="wrap-img">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero_bg_1.jpg" alt="">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero_bg_3.png" alt="">
            </div>
            <div class="bottom-triangle"></div>


            <!-- top-string  -->
            <div class="wrapper-section">
               <div class="rmbt-full-width rmbt-top-string-full-width">
                  <section class="rmbt-container rmbt-top-string">
                     <div class="rmbt-top-string__row">
                        <div class="rmbt-top-string__col">
                           <h3><?php echo rmbt_get_redux_field('rmbt-top_string_title') ?></h3>
                        </div>
                     </div>
                  </section>
               </div>
            </div>

            <!-- main-header  -->
            <div class="wrapper-section">
               <div class="rmbt-full-width rmbt-main-header-full-width">
                  <section class="rmbt-container rmbt-main-header">
                     <div class="rmbt-main-header__row main-header-icons-row">
                        <div class="rmbt-main-header__col">
                           <div class="rmbt-main-header-logo">
                              <?php if (has_custom_logo()) : ?>
                              <?php the_custom_logo(); ?>
                              <?php endif ?>
                           </div>
                           <div class="main-header-icons-row__wrap-blocks">
                              <div class="main-header-icons-row__block rmbt-call-today">
                                 <svg>
                                    <use
                                       xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_1">
                                    </use>
                                 </svg>

                                 <div class="rmbt-main-header__block-text">
                                    <p><?php echo rmbt_get_redux_field('rmbt-call-today_title') ?></p>
                                    <p><?php echo rmbt_redux_field_to_ul('rmbt-call-today_number', 'tel', '', ''); ?>
                                    </p>
                                 </div>
                              </div>
                              <div class="main-header-icons-row__block rmbt-instagram">
                                 <svg>
                                    <use
                                       xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#instagram_1">
                                    </use>
                                 </svg>
                                 <div class="rmbt-main-header__block-text">
                                    <p><?php echo rmbt_get_redux_field('rmbt-instagram_title') ?></p>
                                    <p><?php echo rmbt_get_redux_field('rmbt-instagram_nick') ?></p>
                                 </div>
                              </div>
                              <div class="main-header-icons-row__block rmbt-facebook">
                                 <svg>
                                    <use
                                       xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#facebook_1">
                                    </use>
                                 </svg>
                                 <div class="rmbt-main-header__block-text">
                                    <p><?php echo rmbt_get_redux_field('rmbt-facebook_title') ?></p>
                                    <p><?php echo rmbt_get_redux_field('rmbt-facebook_nick') ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="rmbt-main-header__row main-header-nav">
                        <div class="main-header-nav__col">

                           <?php if (has_nav_menu('rmbt-header_nav')) { ?>
                           <div class="cont-main-header-menu">
                              <?php wp_nav_menu(
                                 array(
                                    'theme_location' => 'rmbt-header_nav',
                                    'container' => 'nav',
                                 )
                              );?>
                           </div>
                           <?php } ?>


                        </div>
                     </div>
               </div>
               </section>
            </div>
            <?php  get_template_part('template-parts/parts/hero_block'); ?>

         </div>
      </div>



      <?php
		// для стандартного WP виджета поиск файл searchform.php должен находится в корне темы
		// для работоспособности поиска в целом searchform.php может быть где угодно
		// get_template_part('searchform');
		?>