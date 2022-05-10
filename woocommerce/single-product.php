<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header( 'shop' ); 
?>
<div class="container">
	<?php do_action( 'woocommerce_before_main_content' ); ?>

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<?php wc_get_template_part( 'content', 'single-product' ); ?>
	<?php endwhile; ?>

	<?php do_action( 'woocommerce_after_main_content' ); ?>
</div>

<?php get_footer( 'shop' ); 
