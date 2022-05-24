<?php
function status_changed_update($order_id) {
    $order = wc_get_order( $order_id );
    $order_changed = $order->get_meta('_status_changed');
    if ($order_changed) update_post_meta($order_id, '_status_changed', 'changed');
    else add_post_meta($order_id, '_status_changed', 'changed');
}
add_action('woocommerce_order_status_changed', 'status_changed_update', 10, 3);

function handle_order_number_custom_query_var( $query, $query_vars ): array
{
    if ( ! empty( $query_vars['status_changed'] ) ) {
        $query['meta_query'][] = array(
            'key' => '_status_changed',
            'value' => esc_attr( $query_vars['status_changed'] ),
        );
    }
    return $query;
}
add_filter( 'woocommerce_order_data_store_cpt_get_orders_query', 'handle_order_number_custom_query_var', 10, 2 );
