<?php
/**
 * woocommerce_single_product_summary hook
 *
 * @hooked woocommerce_template_single_title - 5
 * @hooked woocommerce_template_single_rating - 10
 * @hooked woocommerce_template_single_price - 10
 * @hooked woocommerce_template_single_excerpt - 20
 * @hooked woocommerce_template_single_add_to_cart - 30
 * @hooked woocommerce_template_single_meta - 40
 * @hooked woocommerce_template_single_sharing - 50
 */

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 15 );
add_action ('woocommerce_single_product_summary', 'woocommerce_template_loop_add_to_cart', 15);
add_action ('woocommerce_single_product_summary', 'add_to_whislist_btn', 17);


function add_to_whislist_btn(){
    global $product;
    echo do_shortcode('[ti_wishlists_addtowishlist product_id="'.$product->get_id().'"]');
}