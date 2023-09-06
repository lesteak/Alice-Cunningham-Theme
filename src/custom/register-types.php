<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('General Options');
}

function create_post_types() {
  register_post_type( 'portfolio_items',
    array(
      'labels' => array(
        'name' => __( 'Portfolio Items' ),
        'singular_name' => __( 'Portfolio Item' ),
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


// function custom_query_vars_filter($vars) {
//   $vars[] .= 'url';
//   return $vars;
// }
// add_filter( 'query_vars', 'custom_query_vars_filter' );

// function my_acf_init() {
//   acf_update_setting('google_api_key', get_field('google_maps_api', 'options'));
// }

// add_action('acf/init', 'my_acf_init');
