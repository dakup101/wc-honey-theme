<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
$changed_orders = wc_get_orders(array('status_changed' => 'changed'));
?>

<?php if ($changed_orders) : ?>
    <h4 class="mb-4">Zaktualizowane zamówienia:</h4>
    <table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
        <tbody>
        <?php
        foreach ($changed_orders as $order) {
            $item_count = $order->get_item_count() - $order->get_item_count_refunded();
            ?>
            <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr($order->get_status()); ?> order">
                <td class="order-img">
                    <?php $items = $order->get_items();
                    $some_count = 0;
                    foreach ($items as $item) {
                        if ($some_count == 0) {
                            $product = wc_get_product($item['product_id']);
                            $image = $product->get_image();
                            echo $image;
                        }
                        $some_count++;
                    }

                    ?>
                </td>
                <?php foreach (wc_get_account_orders_columns() as $column_id => $column_name) : ?>
                    <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr($column_id); ?>"
                        data-title="<?php echo esc_attr($column_name); ?>">
                        <?php if (has_action('woocommerce_my_account_my_orders_column_' . $column_id)) : ?>
                            <?php do_action('woocommerce_my_account_my_orders_column_' . $column_id, $order); ?>

                        <?php elseif ('order-number' === $column_id) : ?>
                            <a href="<?php echo esc_url($order->get_view_order_url()); ?>">
                                Zamówienie <?php echo esc_html(_x('#', 'hash before order number', 'woocommerce') . $order->get_order_number()); ?>
                            </a>

                        <?php elseif ('order-date' === $column_id) : ?>
                            <time datetime="<?php echo esc_attr($order->get_date_created()->date('c')); ?>"><?php echo esc_html(wc_format_datetime($order->get_date_created())); ?></time>

                        <?php elseif ('order-status' === $column_id) : ?>
                            <?php $order_changed = $order->get_meta('_status_changed'); ?>
                            <?php if ($order_changed == 'changed') : ?>
                                <?php echo '<span class="changed-order-status">' . esc_html(wc_get_order_status_name($order->get_status())) . '</span>'; ?>
                            <?php else : ?>
                                <?php echo esc_html(wc_get_order_status_name($order->get_status())); ?>
                            <?php endif; ?>
                        <?php elseif ('order-total' === $column_id) : ?>
                            <?php
                            /* translators: 1: formatted order total 2: total order items */
                            echo wp_kses_post(sprintf(_n('%1$s for %2$s item', '%1$s for %2$s items', $item_count, 'woocommerce'), $order->get_formatted_order_total(), $item_count));
                            ?>

                        <?php elseif ('order-actions' === $column_id) : ?>
                            <?php
                            $actions = wc_get_account_orders_actions($order);

                            if (!empty($actions)) {
                                foreach ($actions as $key => $action) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                                    echo '<a href="' . esc_url($action['url']) . '" class="woocommerce-button button ' . sanitize_html_class($key) . '">' . esc_html($action['name']) . '</a>';
                                }
                            }
                            ?>
                        <?php endif; ?>
                    </td>
                <?php endforeach; ?>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

<?php endif; ?>

<?php
$customer_orders = get_posts(apply_filters('woocommerce_my_account_my_orders_query', array(
    'numberposts' => 3,
    'meta_key' => '_customer_user',
    'meta_value' => get_current_user_id(),
    'post_type' => 'shop_order',
    'post_status' => array_keys(wc_get_order_statuses())
)));
?>

<?php
if ($customer_orders) :
    ?>
<h4 class="my-4">Ostatnie Zamówienia:</h4>
    <table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
        <tbody>
        <?php
        foreach ($customer_orders as $order) {
            $order = wc_get_order($order->ID);
            $item_count = $order->get_item_count() - $order->get_item_count_refunded();
            ?>
            <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr($order->get_status()); ?> order">
                <td class="order-img">
                    <?php $items = $order->get_items();
                    $some_count = 0;
                    foreach ($items as $item) {
                        if ($some_count == 0) {
                            $product = wc_get_product($item['product_id']);
                            $image = $product->get_image();
                            echo $image;
                        }
                        $some_count++;
                    }

                    ?>
                </td>
                <?php foreach (wc_get_account_orders_columns() as $column_id => $column_name) : ?>
                    <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr($column_id); ?>"
                        data-title="<?php echo esc_attr($column_name); ?>">
                        <?php if (has_action('woocommerce_my_account_my_orders_column_' . $column_id)) : ?>
                            <?php do_action('woocommerce_my_account_my_orders_column_' . $column_id, $order); ?>

                        <?php elseif ('order-number' === $column_id) : ?>
                            <a href="<?php echo esc_url($order->get_view_order_url()); ?>">
                                Zamówienie <?php echo esc_html(_x('#', 'hash before order number', 'woocommerce') . $order->get_order_number()); ?>
                            </a>

                        <?php elseif ('order-date' === $column_id) : ?>
                            <time datetime="<?php echo esc_attr($order->get_date_created()->date('c')); ?>"><?php echo esc_html(wc_format_datetime($order->get_date_created())); ?></time>

                        <?php elseif ('order-status' === $column_id) : ?>
                            <?php $order_changed = $order->get_meta('_status_changed'); ?>
                            <?php if ($order_changed == 'changed') : ?>
                                <?php echo '<span class="changed-order-status">' . esc_html(wc_get_order_status_name($order->get_status())) . '</span>'; ?>
                            <?php else : ?>
                                <?php echo esc_html(wc_get_order_status_name($order->get_status())); ?>
                            <?php endif; ?>
                        <?php elseif ('order-total' === $column_id) : ?>
                            <?php
                            /* translators: 1: formatted order total 2: total order items */
                            echo wp_kses_post(sprintf(_n('%1$s for %2$s item', '%1$s for %2$s items', $item_count, 'woocommerce'), $order->get_formatted_order_total(), $item_count));
                            ?>

                        <?php elseif ('order-actions' === $column_id) : ?>
                            <?php
                            $actions = wc_get_account_orders_actions($order);

                            if (!empty($actions)) {
                                foreach ($actions as $key => $action) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                                    echo '<a href="' . esc_url($action['url']) . '" class="woocommerce-button button ' . sanitize_html_class($key) . '">' . esc_html($action['name']) . '</a>';
                                }
                            }
                            ?>
                        <?php endif; ?>
                    </td>
                <?php endforeach; ?>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
<?php
else:
    ?>
<h4>Brak zamówień</h4>
<?php
endif;
?>

<?php
/**
 * My Account dashboard.
 *
 * @since 2.6.0
 */
do_action('woocommerce_account_dashboard');

/**
 * Deprecated woocommerce_before_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_before_my_account');

/**
 * Deprecated woocommerce_after_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_after_my_account');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
