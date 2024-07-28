<?php 
defined( 'ABSPATH' ) || exit;


// Menu section sections start
Redux::set_section(
   $opt_name,
		array(
		'title' => esc_html__('We Do Block Section settings', 'rmbt_renoteck'),
		'id' => 'settings_we-aim-block-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

         array(
            'id'       => 'rmbt-we-aim-block_section-title',
            'type'     => 'text',
            'title'    => esc_html__('We Do Block Title', 'rmbt_renoteck'),
            'default'  => esc_html__('We Aim To Please','rmbt_renoteck'),
         ),
         array(
            'id'       => 'rmbt-we-aim-block_section-text',
            'type'     => 'text',
            'title'    => esc_html__('We Do Block Text', 'rmbt_renoteck'),
            'default'  => esc_html__('Your satisfaction is our priority that is why we will minimize the effect a roofing project will have on your business operations. Your new roof will be built to code and will meet all required specifications. On every project done by Renoteck, the final stage is an inspection performed by manufacturer, this final inspection eliminates room for an error.','rmbt_renoteck'),
         ),

         array(
				'id' => 'rmbt-we-aim-block_img-id',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('We Aim Block Image', 'rmbt_renoteck'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about_us-block/photo_2023-11-23_06-31-03.jpg'
				),
			),

         array(
				'id' => 'rmbt-we-aim-bloc_img-alt',
				'type' => 'text',
				'title' => esc_html__('Image description for We Aim Block Image', 'rmbt_renoteck'),
				'default' => esc_html__('', 'rmbt_renoteck'),
			),


      ),
   )
);