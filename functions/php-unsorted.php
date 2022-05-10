<?php
function my_remove_product_result_count() { 
    remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_after_shop_loop' , 'woocommerce_result_count', 20 );
}

add_action( 'after_setup_theme', 'my_remove_product_result_count', 99 );

add_filter( 'woocommerce_get_breadcrumb', function($crumbs, $Breadcrumb){
    $shop_page_id = wc_get_page_id('shop'); //Get the shop page ID
    if($shop_page_id > 0 && !is_shop()) { //Check we got an ID (shop page is set). Added check for is_shop to prevent Home / Shop / Shop as suggested in comments
        $new_breadcrumb = [
            _x( 'Sklep', 'breadcrumb', 'woocommerce' ), //Title
            get_permalink(wc_get_page_id('shop')) // URL
        ];
        array_splice($crumbs, 1, 0, [$new_breadcrumb]); //Insert a new breadcrumb after the 'Home' crumb
    }
    return $crumbs;
}, 10, 2 );