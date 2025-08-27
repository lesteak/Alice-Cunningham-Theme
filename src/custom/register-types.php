<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('General Options');
}

function create_post_types() {
  register_post_type( 'project_items',
    array(
      'labels' => array(
        'name' => __( 'Project Items' ),
        'singular_name' => __( 'Project Item' ),
      ),
      'public' => true,
      'has_archive' => false,
			'supports' => array('title')
    )
  );
  register_post_type( 'portfolio_items',
    array(
      'labels' => array(
        'name' => __( 'Gallery Items' ),
        'singular_name' => __( 'Gallery Item' ),
      ),
      'public' => true,
      'has_archive' => false,
			'supports' => array('title', 'editor')
    )
  );
}
add_action( 'init', 'create_post_types' );

function create_custom_tax() {
  register_taxonomy(
    'discipline',
    'portfolio_items',
    array(
      'label' => __( 'Discipline' ),
      'hierarchical' => true,
    )
  );
}
add_action( 'init', 'create_custom_tax' );
