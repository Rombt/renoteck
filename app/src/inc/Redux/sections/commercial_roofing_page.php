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
				 'default'  => esc_html__('Commercial Roofing','rmbt_renoteck'),
			),

			array(
				'id' => 'rmbt-commercial-roofing-page-text',
				'type' => 'textarea',
				'title' => esc_html__('Enter Your Address', 'rmbt_renoteck'),
				 'default'  => esc_html__('','rmbt_renoteck'),
			),

			array(
				'id' => 'rmbt-commercial-roofing-page-subtitle',
				'type' => 'text',
				'title' => esc_html__('Commercial Roofing Page Title', 'rmbt_renoteck'),
				 'default'  => esc_html__('Commercial Roofing','rmbt_renoteck'),
			),

			array(
				'id' => 'rmbt-commercial-roofing-page-text_2',
				'type' => 'textarea',
				'title' => esc_html__('Enter Your Address', 'rmbt_renoteck'),
				 'default'  => esc_html__('','rmbt_renoteck'),
			),




		),
	)
);