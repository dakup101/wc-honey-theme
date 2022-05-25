<?php /* Template Name: O nas */ ?>
<?php get_header(); ?>
<?php
$part_first = get_field('part_first');
$title = $part_first['title'];
$text = $part_first['text'];
$img = $part_first['Img'];
?>
<section class="about-first mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <h1 class="title"><?php echo $title ?></h1>
                <p class="text"><?php echo $text ?></p>
            </div>
            <div class="col-12 col-md-5 offset-md-1 about-first__img">
                <img src="<?php echo $img ?>" alt="<?php echo $title ?>">
            </div>
        </div>
    </div>
</section>
<?php
$part_second = get_field('part_second');
$boxes = ["box_1", "box_2", "box_3"];
?>
<section class="about-second mt-5 py-5 boxes">
    <div class="container">
        <div class="row">
            <?php foreach ($boxes as $box) : ?>
                <div class="col-12 col-md-4 my-2">
                    <div class="boxes__item dash-bordered"
                         style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/boxes-mask.png'; ?>')">
                        <?php
                        $title = $part_second[$box]['title'];
                        $text = $part_second[$box]['text'];
                        ?>
                        <div class="boxes__item--content" style="width: 100%">
                            <h2 class="title text-center"><?php echo $title ?></h2>
                            <div class="text text-center mt-3">
                                <p><?php echo $text ?></p>
                            </div>
                        </div>
                        <div class="boxes__item--overlay"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
$part_third = get_field('part_third');
$title = $part_third['title'];
$text = $part_third['text'];
$btn_text = $part_third['btn_text'];
$btn_link = $part_third['btn_link'];
$img = $part_third['img'];
?>
<section class="about-third my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 d-flex flex-column justify-content-center">
                <div class="about-third__content">
                    <h2 class="title"><?php echo $title?></h2>
                    <div class="text mt-3">
                        <?php echo $text; ?>
                    </div>
                    <a href="<?php echo $btn_link ?>" class="site-btn site-btn__yellow dash-bordered mt-3">
                    <?php echo $btn_text ?>
                    </a>
                    <div class="about-third__overlay dash-bordered"></div>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <img class="about-third__img"  src="<?php echo $img ?>" alt="<?php echo $title ?>">
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
