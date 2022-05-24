<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if (!defined('ABSPATH')) {
    exit;
}

do_action('woocommerce_before_account_navigation');
?>
<div class="user-profile">
    <div class="user-profile__img-wrapper">
        <?php echo get_avatar(get_current_user_id()); ?>
    </div>
    <div class="user-profile__name">
        Cześć,
        <?php $current_user = wp_get_current_user();
        echo $current_user->first_name;
        ?>
    </div>
</div>
<nav class="woocommerce-MyAccount-navigation">
    <a href="<?php echo get_home_url() . '/moje-konto' ?>">
        <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="1" y="1" width="24" height="14" rx="2" stroke="white" stroke-width="2"/>
            <rect x="3.25" y="5.25" width="9.5" height="0.5" rx="0.25" stroke="white" stroke-width="0.5"/>
            <rect x="3.25" y="10.25" width="9.5" height="0.5" rx="0.25" stroke="white" stroke-width="0.5"/>
            <path d="M20.4854 8.28373C20.8795 7.97537 21.1671 7.55252 21.3083 7.074C21.4495 6.59549 21.4372 6.0851 21.2732 5.61385C21.1091 5.14261 20.8014 4.73393 20.3929 4.44468C19.9845 4.15544 19.4955 4 18.994 4C18.4926 4 18.0036 4.15544 17.5951 4.44468C17.1867 4.73393 16.879 5.14261 16.7149 5.61385C16.5509 6.0851 16.5386 6.59549 16.6798 7.074C16.821 7.55252 17.1086 7.97537 17.5027 8.28373C16.8274 8.55279 16.2382 8.99906 15.7979 9.57495C15.3576 10.1508 15.0826 10.8348 15.0024 11.5538C14.9966 11.6063 15.0013 11.6595 15.0161 11.7102C15.0309 11.7609 15.0557 11.8082 15.0889 11.8494C15.156 11.9326 15.2536 11.9859 15.3602 11.9976C15.4668 12.0092 15.5737 11.9783 15.6574 11.9116C15.7411 11.8449 15.7946 11.7478 15.8064 11.6418C15.8946 10.8603 16.2693 10.1386 16.8588 9.61448C17.4483 9.09037 18.2114 8.80064 19.0021 8.80064C19.7928 8.80064 20.5558 9.09037 21.1453 9.61448C21.7348 10.1386 22.1095 10.8603 22.1978 11.6418C22.2087 11.74 22.2558 11.8307 22.3301 11.8965C22.4043 11.9622 22.5004 11.9982 22.5998 11.9976H22.644C22.7493 11.9855 22.8457 11.9325 22.9119 11.8502C22.9782 11.7678 23.009 11.6627 22.9977 11.5578C22.9171 10.8367 22.6407 10.151 22.1981 9.57427C21.7555 8.99749 21.1635 8.55137 20.4854 8.28373V8.28373ZM18.994 7.99989C18.676 7.99989 18.3652 7.90611 18.1007 7.7304C17.8363 7.55469 17.6302 7.30495 17.5085 7.01275C17.3868 6.72056 17.355 6.39904 17.417 6.08885C17.4791 5.77866 17.6322 5.49373 17.8571 5.2701C18.0819 5.04646 18.3685 4.89416 18.6804 4.83246C18.9923 4.77076 19.3155 4.80243 19.6094 4.92346C19.9032 5.04449 20.1543 5.24945 20.331 5.51241C20.5076 5.77538 20.6019 6.08455 20.6019 6.40081C20.6019 6.82492 20.4325 7.23165 20.131 7.53153C19.8295 7.83142 19.4205 7.99989 18.994 7.99989Z"
                  fill="white"/>
        </svg>
        <span>Kokpit</span>
    </a>
    <a href="<?php echo get_home_url() . '/moje-konto/orders' ?>">
        <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M9.73012 1H10.3199C10.8052 1 11.2147 1.32498 11.3426 1.76923H8.7074C8.83526 1.32498 9.24474 1 9.73012 1ZM7.68692 1.76923C7.83 0.768937 8.69026 0 9.73012 0H10.3199C11.3597 0 12.22 0.768937 12.3631 1.76923H14.3332C14.7392 1.76923 15.0888 2.01128 15.2454 2.35897H17.0513C18.7081 2.35897 20.0513 3.70212 20.0513 5.35897V20C20.0513 21.6569 18.7081 23 17.0513 23H3C1.34315 23 0 21.6568 0 20V5.35897C0 3.70211 1.34315 2.35897 3 2.35897H4.80553C4.96214 2.01128 5.31169 1.76923 5.71777 1.76923H7.68692ZM17.0513 4.35897H3C2.44771 4.35897 2 4.80668 2 5.35897V20C2 20.5523 2.44772 21 3 21H17.0513C17.6036 21 18.0513 20.5523 18.0513 20V5.35897C18.0513 4.80669 17.6036 4.35897 17.0513 4.35897Z"
                  fill="white"/>
            <rect x="4.27539" y="8.25" width="11.5" height="0.5" rx="0.25" stroke="white" stroke-width="0.5"/>
            <rect x="4.27539" y="12.25" width="11.5" height="0.5" rx="0.25" stroke="white" stroke-width="0.5"/>
            <rect x="4.27539" y="16.25" width="7.5" height="0.5" rx="0.25" stroke="white" stroke-width="0.5"/>
        </svg>
        <span>Zamówienia
        <?php
        $changed_orders = wc_get_orders( array( 'status_changed' => 'changed' ) );
        $changed_orders_amount = sizeof($changed_orders);
        if ($changed_orders_amount !== 0) :
            ?>
                            <?php echo '('.$changed_orders_amount.')' ?>
        <?php endif; ?>
        </span>
    </a>
    <a href="<?php echo get_home_url() . '/moje-konto/edit-account' ?>">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 3.49994H16V2.20994C16 1.49121 15.7145 1.00823 15.2063 0.500009C14.698 -0.00821429 14.0087 0 13.29 0H6.71C5.99126 0 5.30196 -0.00821429 4.79374 0.500009C4.28552 1.00823 4 1.49121 4 2.20994V3.49994H1C0.734784 3.49994 0.48043 3.6053 0.292893 3.79284C0.105357 3.98037 0 4.23473 0 4.49994V18.4999C0 18.7652 0.105357 19.0195 0.292893 19.2071C0.48043 19.3946 0.734784 19.4999 1 19.4999H19C19.2652 19.4999 19.5196 19.3946 19.7071 19.2071C19.8946 19.0195 20 18.7652 20 18.4999V4.49994C20 4.23473 19.8946 3.98037 19.7071 3.79284C19.5196 3.6053 19.2652 3.49994 19 3.49994ZM5.5 5.49994H14.5V17.4999H5.5V5.49994ZM5.5 2.20994C5.5 2.02164 5.5748 1.84105 5.70795 1.7079C5.84111 1.57475 6.0217 1.49994 6.21 1.49994H13.79C13.9783 1.49994 14.1589 1.57475 14.292 1.7079C14.4252 1.84105 14.5 2.02164 14.5 2.20994V3.49994H5.5V2.20994ZM2 5.49994H4V17.4999H2V5.49994ZM18 17.4999H16V5.49994H18V17.4999Z"
                  fill="white"/>
        </svg>
        <span>Szczegóły konta</span>
    </a>
    <a href="http://localhost/honey/moje-konto/customer-logout/?_wpnonce=129f0432a8">
        <svg width="17" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M14.72 6.44V9.2C15.208 9.2 15.676 9.39386 16.0211 9.73892C16.3661 10.084 16.56 10.552 16.56 11.04V21.16C16.56 21.648 16.3661 22.116 16.0211 22.4611C15.676 22.8061 15.208 23 14.72 23H1.84C1.352 23 0.88399 22.8061 0.538923 22.4611C0.193856 22.116 0 21.648 0 21.16V11.04C0 10.552 0.193856 10.084 0.538923 9.73892C0.88399 9.39386 1.352 9.2 1.84 9.2V6.44C1.84 4.73201 2.5185 3.09397 3.72623 1.88623C4.93397 0.678498 6.57201 0 8.28 0C9.98799 0 11.626 0.678498 12.8338 1.88623C14.0415 3.09397 14.72 4.73201 14.72 6.44ZM3.68 9.2H12.88V6.44C12.88 5.22 12.3954 4.04998 11.5327 3.18731C10.67 2.32464 9.5 1.84 8.28 1.84C7.06 1.84 5.88998 2.32464 5.02731 3.18731C4.16464 4.04998 3.68 5.22 3.68 6.44V9.2ZM3.83984 11.04C2.73527 11.04 1.83984 11.9354 1.83984 13.04V19.16C1.83984 20.2645 2.73527 21.16 3.83984 21.16H12.7198C13.8244 21.16 14.7198 20.2645 14.7198 19.16V13.04C14.7198 11.9354 13.8244 11.04 12.7198 11.04H3.83984Z"
                  fill="white"/>
            <rect x="6.28027" y="13" width="4" height="4" rx="2" fill="white"/>
            <rect x="7.28027" y="15" width="2" height="4" rx="1" fill="white"/>
        </svg>
        <span>Wyloguj się</span>
    </a>
</nav>

<?php do_action('woocommerce_after_account_navigation'); ?>
