<?php 
defined( 'ABSPATH' ) || exit;


// Menu section sections start
Redux::set_section(
   $opt_name,
		array(
		'title' => esc_html__('New Roof Construction Block Section settings', 'rmbt_renoteck'),
		'id' => 'settings_new-roof-construction-block-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

         array(
            'id'       => 'rmbt-new-roof-construction-block_section-title',
            'type'     => 'text',
            'title'    => esc_html__('New Roof Construction Block Title', 'rmbt_renoteck'),
            'default'  => esc_html__('NEW ROOF CONSTRUCTION','rmbt_renoteck'),
         ),
         array(
            'id'       => 'rmbt-new-roof-construction-block_section-text',
            'type'     => 'textarea',
            'title'    => esc_html__('New Roof Construction Block Text', 'rmbt_renoteck'),
            'default'  => esc_html__('The more you know about the different types of flat roofs, how they are made and the materials they use, the more informed your decisions will be and the easier it will be to make the right one.
A Renoteck specialist will be able to answer to all your questions and help to make informative decision regarding your commercial project needs.
Renoteck Roofing has experience and expertise with the following types of commercial roofing applications:','rmbt_renoteck'),
         ),

      ),
   )
);