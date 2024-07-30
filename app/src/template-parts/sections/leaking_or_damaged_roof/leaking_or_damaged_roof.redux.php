<?php 
defined( 'ABSPATH' ) || exit;


// Menu section sections start
Redux::set_section(
   $opt_name,
		array(
		'title' => esc_html__('Leaking Or Damaged Roof Block Section settings', 'rmbt_renoteck'),
		'id' => 'settings_leaking-or-damaged-roof-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

         array(
            'id'       => 'rmbt_leaking-or-damaged-roof_section-title',
            'type'     => 'text',
            'title'    => esc_html__('Leaking Or Damaged Roof Block Title', 'rmbt_renoteck'),
            'default'  => esc_html__('LEAKING OR Damaged Roof','rmbt_renoteck'),
         ),
         array(
            'id'       => 'rmbt_leaking-or-damaged-roof_section-text-1',
            'type'     => 'textarea',
            'title'    => esc_html__('leaking Or Damaged RoofBlock Text', 'rmbt_renoteck'),
            'default'  => esc_html__('The more you know about the different types of flat roofs, how they are made and the materials they use, the more informed your decisions will be and the easier it will be to make the right one.
               A Renoteck specialist will be able to answer to all your questions and help to make informative decision regarding your commercial project needs.
               Renoteck Roofing has experience and expertise with the following types of commercial roofing applications:','rmbt_renoteck'),
         ),


         array(
            'id'       => 'rmbt_leaking-or-damaged-roof_section-subtitle',
            'type'     => 'text',
            'title'    => esc_html__('Leaking Or Damaged Roof Block Title', 'rmbt_renoteck'),
            'default'  => esc_html__('Here`s the Process','rmbt_renoteck'),
         ),
         array(
            'id'       => 'rmbt_leaking-or-damaged-roof_section-text-2',
            'type'     => 'textarea',
            'title'    => esc_html__('leaking Or Damaged RoofBlock Text', 'rmbt_renoteck'),
            'default'  => esc_html__('Renoteck Roofing approaches our projects with a proven three-step process that begins the moment you call and continues long after your roof has been repaired or installed. The team at Renoteck Roofing in Calgary is trained, qualified and each individual on site is an experienced roofing specialist. Our friendly team will work with you to determine your specific needs by:','rmbt_renoteck'),
         ),

         /*------------------  the start of first article block-----------------*/
         // array(
         //    'id' => 'rmbt_leaking-or-damaged-roof_title-1',
         //    'type' => 'text',
         //    'title' => esc_html__('Title of first article','rmbt_renoteck'),
         //    'default' => esc_html__('We Do METAL ROOFING', 'rmbt_renoteck'),
         // ),
         array(
            'id' => 'rmbt_leaking-or-damaged-roof_text-1',
            'type' => 'textarea',
            'title' => esc_html__('Text of first article', 'rmbt_renoteck'), 
            'default' => esc_html__('Our experienced estimator will visit your location, our initial service charge includes an assessment of the problem and 30 minutes to repair, if it’s a minor problem.', 'rmbt_renoteck'),
         ),
         
         array(
            'id' => 'rmbt_leaking-or-damaged-roof_img-id-1',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of first article', 'rmbt_renoteck'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
            'url' => '/assets/img/leaking_or_damaged_roof/leaking_or_damaged_roof_1.jpg'
            ),
         ),
         array(
            'id' => 'rmbt_leaking-or-damaged-roof_img-alt-1',
            'type' => 'text',
            'title' => esc_html__('Image description of first article', 'rmbt_renoteck'),
            'default' => esc_html__('picture of first article', 'rmbt_renoteck'),
         ),
         /*------------------  the end of first article block -----------------*/

      ),
   )
);