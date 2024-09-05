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


function my_remove_description_tab( $tabs ) {
  unset( $tabs['description'] );
  return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'my_remove_description_tab', 11 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

function alice_description() {
  echo '<div class="mt-8 border-t pt-8 border-black">';
    the_content();

  if(get_field('purchase_prevention')) {
    echo '<a class="btn btn-primary" href="/contact">Contact the artist to arrange sale and delivery</a>';
  }

  echo '</div>';
}
add_action('woocommerce_single_product_summary', 'alice_description', 55);

//prevent add to cart for "contact artist" products
function wpa_var_is_purchasable( $purchasable, $product ){
  if(get_field('purchase_prevention')) {
    return false;
  }

  return true;
}
add_filter( 'woocommerce_is_purchasable', 'wpa_var_is_purchasable', 10, 2 );


/**
 * Filters the list of attachment image attributes.
 *
 * @since 2.8.0
 *
 * @param string[]     $attr       Array of attribute values for the image markup, keyed by attribute name.
 *                                 See wp_get_attachment_image().
 * @param WP_Post      $attachment Image attachment post.
 * @param string|int[] $size       Requested image size. Can be any registered image size name, or
 *                                 an array of width and height values in pixels (in that order).
 */
function filter_wp_get_attachment_image_attributes( $attr, $attachment, $size ) {


  // Is a WC product
  if ( is_product()) {
    // Add class
    $attr['data-fancybox'] .= ' product-image';
  }

    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'filter_wp_get_attachment_image_attributes', 10, 3 );
