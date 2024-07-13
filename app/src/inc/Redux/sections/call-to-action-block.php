<?php 
defined( 'ABSPATH' ) || exit;


// Menu section sections start
Redux::set_section(
   $opt_name,
		array(
		'title' => esc_html__('Call To Action Section settings', 'rmbt_renoteck'),
		'id' => 'settings_call-to-action-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(


         array(
            'id'       => 'rmbt-call-to-action-block_section-title',
            'type'     => 'text',
            'title'    => esc_html__('Call To Action Title', 'rmbt_renoteck'),
            'default'  => esc_html__('GET A FREE ESTIMATE','rmbt_renoteck'),
         ),
         
         array(
            'id'       => 'rmbt-call-to-action-block_section-text',
            'type'     => 'textarea',
            'title'    => esc_html__('Call To Action text', 'rmbt_renoteck'),
            'default'  => esc_html__('We will gladly come to you, measure your roof, go over the options and provide a free quote.','rmbt_renoteck'),
         ),

          
      ),
   )
);