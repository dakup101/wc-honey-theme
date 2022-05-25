<?php
add_action('wp_ajax_data_fetch' , 'product_fetch');
add_action('wp_ajax_nopriv_data_fetch','product_fetch');
function product_fetch() {

    $the_query = new WP_Query( array( 'posts_per_page' => 6, 's' => $_POST['search'], 'post_type' => 'product' ) );
    $response = array();
    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>
            <?php
            $product = wc_get_product(get_the_ID());
            $price = $product->get_price();
            $post_data = array(
                "Title" => get_the_title(),
                "Link" => get_the_permalink(),
                "Price" => $price
            );
            array_push($response, $post_data);
            ?>
        <?php endwhile;
        $response = json_encode($response);
        echo $response;
        wp_reset_postdata();
    endif;
    die();
}