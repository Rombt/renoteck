<?php
defined('ABSPATH') || exit;


// Menu page sections start
Redux::set_section(
	$opt_name,
	array(
		'id' => 'settings_commercial-roofing',
		'title' => esc_html__('commercial-roofing settings', 'rmbt_renoteck'),
		'desc' => esc_html__('commercial-roofing', 'rmbt_renoteck'),
		'customizer_width' => '450',
		// 'subsection' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-commercial-roofing-page-title',
				'type' => 'text',
				'title' => esc_html__('Commercial Roofing Page Title', 'rmbt_renoteck'),
				 'default'  => 'Commercial Roofing','rmbt_renoteck',
			),

			array(
				'id' => 'rmbt-commercial-roofing-page-text',
				'type' => 'textarea',
				'title' => esc_html__('Enter Your Address', 'rmbt_renoteck'),
				 'default'  => esc_html__('Roof replacement can be very costly that is why our dedicated team will perform survey of your roof to determine if you require new roof or just a repair. We have installed virtually every type of roof system and understand that each roof is unique. We will closely work with you to establish efficient roofing plan and determine what roofing system is best suitable for your commercial or industrial building.','rmbt_renoteck'),
			),

			array(
				'id' => 'rmbt-commercial-roofing-page-subtitle',
				'type' => 'text',
				'title' => esc_html__('Commercial Roofing Page Second Title', 'rmbt_renoteck'),
				 'default'  => esc_html__('Our 3-Step Process','rmbt_renoteck'),
			),

			array(
				'id' => 'rmbt-commercial-roofing-page-text_2',
				'type' => 'textarea',
				'title' => esc_html__('Enter Your Address', 'rmbt_renoteck'),
				 'default'  => esc_html__('Renoteck Roofing approaches our projects with a proven three-step process that begins the moment you call and continues long after your roof has been repaired or installed. The team at Renoteck Roofing in Calgary is trained, qualified and each individual on site is an experienced roofing specialist. Our friendly team will work with you to determine your specific needs by:','rmbt_renoteck'),
			),


		 	array(
				'id' => 'commercial-roofing-page-gallery-block',
				'type' => 'gallery',
				'title' => esc_html__('Add/Edit About Us Gallery', 'rmbt_renoteck'),
			),
			array(
				'id' => 'rmbt-rmbt-commercial-roofing-page-gallery-block-arrow-left-id',
				'type' => 'text',
				'title' => esc_html__('Arrow left for pagination id', 'rmbt_renoteck'),
				 'default'  => esc_html__('arrow_left','rmbt_renoteck'),
			),
			array(
				'id' => 'rmbt-rmbt-commercial-roofing-page-gallery-block-arrow-right-id',
				'type' => 'text',
				'title' => esc_html__('Arrow left for pagination id', 'rmbt_renoteck'),
				 'default'  => esc_html__('arrow_right','rmbt_renoteck'),
			),


		),
	)
);