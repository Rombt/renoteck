<?php
defined('ABSPATH') || exit;


// Menu page sections start
Redux::set_section(
	$opt_name,
	array(
		'id' => 'settings_rmbt-about-us-gallery-block',
		'title' => esc_html__('About us gallery block settings', 'rmbt_renoteck'),
		'desc' => esc_html__('rmbt-about-us-gallery-block', 'rmbt_renoteck'),
		'customizer_width' => '450',
		// 'subsection' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(


         array(
				'id' => 'about-us-gallery-block-gallery',
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