<?php
add_theme_support('woocommerce');
require_once(get_template_directory().'/functions/php-add-scripts-styles.php');
require_once(get_template_directory().'/functions/php-options-page.php');
require_once(get_template_directory().'/functions/php-remove-editor.php');
require_once(get_template_directory().'/functions/php-allow-svg.php');
require_once(get_template_directory().'/functions/php-admin-sticky-update.php');
require_once(get_template_directory().'/functions/php-register-sidebars.php');
require_once(get_template_directory().'/functions/php-wc-single-product-summury-layout.php');
require_once(get_template_directory().'/functions/php-unsorted.php');
require_once(get_template_directory().'/functions/php-change-breadcrumb-separator.php');
require_once(get_template_directory().'/functions/php-order-statuses-update.php');

add_action( 'wp_footer', 'trigger_for_ajax_add_to_cart' );
function trigger_for_ajax_add_to_cart() {
    ?>
    <script type="text/javascript">
        (function($){
            $('body').on( 'added_to_cart', function(){
                console.log('added to cart');
                document.dispatchEvent(
                    new CustomEvent('vanilla_added_to_cart')
                );
            });
            $('body').on( 'adding_to_cart', function(){
                console.log('adding to cart');
                document.dispatchEvent(
                    new CustomEvent('vanilla_adding_to_cart')
                );
            });
        })(jQuery);
    </script>
    <?php
}