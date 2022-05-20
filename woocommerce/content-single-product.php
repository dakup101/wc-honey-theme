<?php
defined( 'ABSPATH' ) || exit;
global $product;
?>
<?php do_action( 'woocommerce_before_single_product' ); ?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="row gx-5">
		<div class="col-5">
			<div class="product-images position-relative">
                <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
            </div>
		</div>
		<div class="col-7">
			<div class="summary entry-summary">
				<?php do_action( 'woocommerce_single_product_summary' ); ?>
			</div>
		</div>
	</div>
	<?php do_action( 'woocommerce_after_single_product_summary' ); ?>
</div>
<?php do_action( 'woocommerce_after_single_product' ); ?>