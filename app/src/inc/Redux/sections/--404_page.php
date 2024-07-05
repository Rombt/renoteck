<?php 
defined( 'ABSPATH' ) || exit;


// 404 page sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('404 page', 'rmbt_renoteck'),
      'id'               => 'settings_404-page',
      'desc'             => esc_html__('404 page settings', 'rmbt_renoteck'),
      'customizer_width' => '450',
      'subsection' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'           => '404_img',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('404 image', 'rmbt_renoteck'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => esc_url(get_template_directory_uri()) . '/assets/img/Image_301x301.jpg'
            ),            
         ),

      ),
   )
);