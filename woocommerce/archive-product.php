<?php
global $post;
defined( 'ABSPATH' ) || exit;
get_header( 'shop' );
if (is_shop() && !is_product_category()){
	$baner = get_field('banner', 17);
	$bTitle = $baner['title'];
	$bText = $baner['text'];
	$bImg = $baner['img'];
} 
if (is_product_category()){
	$category = get_queried_object();
	$bTitle = $category->name;
	$bText = $category->description;
	$bImg = get_field('img', $category);
}

?>
<div class="container py-4">
	<?php do_action( 'woocommerce_before_main_content' ); ?>
	<div class="row gx-5 mt-4">
		<div class="shop-sidebar col-md-3">
			<?php do_action( 'woocommerce_sidebar' ); ?>
		</div>
		<div class="shop-content col-12 col-md-9">
			<?php if ($bTitle && $bText && $bImg) : ?>
				<div class="shop-content__banner text-white dash-bordered mb-3">
					<h1 class="shop-content__banner--title"><?php echo $bTitle; ?></h1>
					<p class="shop-content__banner--text"><?php echo $bText ?></p>
					<div class="shop-content__banner--img-wrapper">
						<img src="<?php echo $bImg; ?>" alt="Honey Shop" class="shop-content__banner--img">
					</div>
				</div>
			<?php endif; ?>
			<?php
			if ( woocommerce_product_loop() ) {
				do_action( 'woocommerce_before_shop_loop' );
				woocommerce_product_loop_start();
				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();
						do_action( 'woocommerce_shop_loop' );
						wc_get_template_part( 'content', 'product' );
					}
				}
				woocommerce_product_loop_end();
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				do_action( 'woocommerce_no_products_found' );
			}
			?>
		</div>
	</div>
</div>
<?php
do_action( 'woocommerce_after_main_content' );
get_footer( 'shop' );
