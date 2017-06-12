<?php
/**
 * @package WooCommerce_Each_add_to_cart
 * @version 1.0
 */
/*
Plugin Name: WooCommerce Each add to cart
Plugin URI: https://github.com/musus/WooCommerce_Each_add_to_cart
Description: Add each time you click the button for WooCommerce.
Author: Susumu Seino
Version: 1.0
Author URI: https://susu.mu/
*/

// 
function each_add_to_cart( $cart_item_data, $product_id ){

  $unique_product_time = md5( microtime().rand() );
  $cart_item_data['unique_key'] = $unique_product_time;

  return $cart_item_data;

}

add_filter( 'woocommerce_add_cart_item_data','each_add_to_cart', 10, 2 );