<?php

/**
 * Single Topic Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<div id="bbpress-forums" class="bbpress-wrapper single-topic container my-5">
    <?php bbp_breadcrumb(); ?>

    <!--	--><?php //bbp_topic_subscription_link(); ?>

    <!--	--><?php //bbp_topic_favorite_link(); ?>

    <?php do_action( 'bbp_template_before_single_topic' ); ?>
<div class="row gx-5">
    <div class="col-12 col-md-8">
        <?php if ( post_password_required() ) : ?>

            <?php bbp_get_template_part( 'form', 'protected' ); ?>

        <?php else : ?>

            <?php bbp_topic_tag_list(); ?>

            <!--		--><?php //bbp_single_topic_description(); ?>

            <?php if ( bbp_show_lead_topic() ) : ?>

                <?php bbp_get_template_part( 'content', 'single-topic-lead' ); ?>

            <?php endif; ?>

            <?php if ( bbp_has_replies() ) : ?>

                <?php bbp_get_template_part( 'pagination', 'replies' ); ?>

                <?php bbp_get_template_part( 'loop',       'replies' ); ?>

                <?php bbp_get_template_part( 'pagination', 'replies' ); ?>

            <?php endif; ?>

            <?php bbp_get_template_part( 'form', 'reply' ); ?>

        <?php endif; ?>

        <?php bbp_get_template_part( 'alert', 'topic-lock' ); ?>

        <?php do_action( 'bbp_template_after_single_topic' ); ?>
    </div>
    <div class="col-12 col-md-4">
        <h5>Miejsce na kolejną reklamę</h5>
    </div>
</div>

</div>
