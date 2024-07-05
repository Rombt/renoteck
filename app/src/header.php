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
   <?php  get_template_part('template-parts/components/debug-grid');?>

   <div class="rmbt-page-wrap">


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





      <?php
		// для стандартного WP виджета поиск файл searchform.php должен находится в корне темы
		// для работоспособности поиска в целом searchform.php может быть где угодно
		// get_template_part('searchform');
		?>