<?php defined('ABSPATH') || exit; ?>

<section class="my-account my-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-3 col-12 bg-yellow">
                <?php do_action('woocommerce_account_navigation'); ?>
            </div>
            <div class="col-md-9 col-12">
                <div class="woocommerce-MyAccount-content">
                    <?php do_action('woocommerce_account_content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

