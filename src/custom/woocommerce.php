<?php 
function dx_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'dx_add_woocommerce_support' );


function my_theme_wrapper_start() {
  echo '<div class="container">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

add_action( 'init', function () {
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
} );

add_filter( 'woocommerce_product_tabs', 'my_remove_description_tab', 11 );
 
function my_remove_description_tab( $tabs ) {
  unset( $tabs['description'] );
  return $tabs;
}
