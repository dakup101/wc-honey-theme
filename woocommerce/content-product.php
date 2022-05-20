<?php 
defined( 'ABSPATH' ) || exit;
global $product;
if ( empty( $product ) || ! $product->is_visible() ) { return; }
$price = $product->get_regular_price();
$sale_price = $product->get_sale_price();
$name = $product->get_name();
$image = $product->get_image();    
$link = $product->get_permalink();
?>

<div <?php wc_product_class( 'products__item', $product ); ?>>
	<a href="<?php echo $link; ?>" class="product-card px-4">
		<div class="product-card__image mb-3 text-center">
			<?php echo $image ?>
		</div>
		<?php if ($sale_price) : ?>
			<!-- <div class="loop-on-sale">
				Promocja!
			</div> -->
		<?php endif; ?>
		<div class="product-card__content">
			<div class="product-card__content--title">
				<h3><?php echo $name ?></h3>
			</div>
			<div class="product-card__content--price">
				<?php if ($sale_price) : ?>
					<span class="product-card__content--price--old">
						<?php echo $price; ?>
					</span>
					<span class="product-card__content--price--regular">
						<?php echo $sale_price; ?>
					</span>
				<?php else : ?>
					<span class="product-card__content--price--regular">
						<?php echo $price; ?>
					</span>
				<?php endif; ?>
			</div>
		</div>
	</a>
</div>
