<?php /* Template Name: Kontakt */ ?>
<?php get_header(); ?>
<?php
$part_first = get_field('part_first');
$title = $part_first['title'];
$text = $part_first['text'];
$map = $part_first['map'];
?>
<section class="contact-first mt-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-6 col-12 d-flex flex-column justify-content-center">
                <h1 class="title">
                    <?php echo $title; ?>
                </h1>
                <div class="text">
                    <?php echo $text; ?>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="contact-first__map">
                    <?php echo $map; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$part_second = get_field('part_second');
$title_1 = $part_second['box_title_1'];
$title_2 = $part_second['box_title_2'];
$text_1 = $part_second['box_text_1'];
$text_2 = $part_second['box_text_2'];
$cf = $part_second['cf'];
?>
<section class="contact-second my-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-12 col-md-6">
                <div class="boxes">
                    <div class="boxes__item dash-bordered text-white flex-column"
                         style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/boxes-mask.png'; ?>')">
                        <div class="p-5">
                            <h4 class="title"><?php echo $title_1 ?></h4>
                            <div class="text fs-5 mt-3"><?php echo $text_1 ?></div>
                            <h4 class="title my-3 mt-5"><?php echo $title_2 ?></h4>
                            <div class="text fs-5"><?php echo $text_2 ?></div>
                            <div class="boxes__item--overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="contact-form">
                    <?php echo do_shortcode($cf)?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
