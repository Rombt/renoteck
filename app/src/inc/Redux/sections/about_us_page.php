<?php 
defined( 'ABSPATH' ) || exit;


// Menu section sections start
Redux::set_section(
   $opt_name,
		array(
		'title' => esc_html__('About Us Section settings', 'rmbt_renoteck'),
		'id' => 'settings_about_us-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(


         array(
            'id'       => 'rmbt-about-us_section-title',
            'type'     => 'text',
            'title'    => esc_html__('About Us Title', 'rmbt_renoteck'),
            'default'  => esc_html__('Serving Calgary and surrounding communities for over 25 years','rmbt_renoteck'),
         ),
         
         array(
            'id'       => 'rmbt-about-us_section-text',
            'type'     => 'textarea',
            'title'    => esc_html__('About Us text', 'rmbt_renoteck'),
            'default'  => esc_html__('We`re the roofing contractors Calgary can count on doing the job right. RenoTeck has extensive experience in roofing and exteriors for single-family homes and commercial properties in Calgary, Alberta, including 24/7 emergency roofing services. We work closely with property owners like you to find a perfect solution for your roofing and exterior needs.','rmbt_renoteck'),
         ),

         array(
				'id' => 'rmbt-about-us-bg_image',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('About Us Block Background Image', 'rmbt_renoteck'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about_us-block/.jpg'
				),
			),
         array(
				'id' => 'rmbt-about-us-bg_imag_alt',
				'type' => 'text',
				'title' => esc_html__('Description for background picture', 'rmbt_renoteck'),
			),


			
         array(
				'id' => 'about-us-gallery-block',
				'type' => 'gallery',
				'title' => esc_html__('Add/Edit About Us Gallery', 'rmbt_renoteck'),
			),
			array(
				'id' => 'rmbt-rmbt-about-us-gallery-block-arrow-left-id',
				'type' => 'text',
				'title' => esc_html__('Arrow left for pagination id', 'rmbt_renoteck'),
				 'default'  => esc_html__('arrow_left','rmbt_renoteck'),
			),
			array(
				'id' => 'rmbt-rmbt-about-us-gallery-block-arrow-right-id',
				'type' => 'text',
				'title' => esc_html__('Arrow left for pagination id', 'rmbt_renoteck'),
				 'default'  => esc_html__('arrow_right','rmbt_renoteck'),
			),
          
      ),
   )
);