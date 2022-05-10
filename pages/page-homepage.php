<?php /* Template Name: Strona Główna */ ?>
<?php get_header(); ?>
<section class="hero mb-5">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide d-flex align-items-center justify-content-center overflow-hidden">
                <img class="h-100" src="<?php echo get_template_directory_uri().'/assets/images/slide.jpg' ?>" alt="" lazyload="lazyload">
            </div>
            <div class="swiper-slide d-flex align-items-center justify-content-center overflow-hidden">
                <img class="h-100" src="<?php echo get_template_directory_uri().'/assets/images/slide1.jpg' ?>" alt="" lazyload="lazyload">
            </div>
        </div>
        <div class="swiper-buttons">
            <div class="swiper-button-wrapper container h-100 position-relative">
                <div class="swiper-button-prev">
                    <svg width="51" height="88" viewBox="0 0 51 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5 43.4568L47.9246 68.5263C52.0251 72.9812 52.0251 80.204 47.9246 84.6588C43.8241 89.1137 37.1759 89.1137 33.0754 84.6588L3.07538 52.0663C-1.02513 47.6114 -1.02513 40.3886 3.07538 35.9337L33.0754 3.34115C37.1759 -1.11373 43.8241 -1.11373 47.9246 3.34115C52.0251 7.79602 52.0251 15.0188 47.9246 19.4737L25.5 43.4568Z" fill="white" fill-opacity="0.8"/>
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg width="51" height="88" viewBox="0 0 51 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5 44.5432L3.07538 19.4737C-1.02512 15.0188 -1.02512 7.79604 3.07538 3.34117C7.17588 -1.1137 13.8241 -1.1137 17.9246 3.34117L47.9246 35.9338C52.0251 40.3886 52.0251 47.6114 47.9246 52.0663L17.9246 84.6589C13.8241 89.1137 7.17588 89.1137 3.07538 84.6589C-1.02513 80.204 -1.02513 72.9812 3.07538 68.5263L25.5 44.5432Z" fill="white" fill-opacity="0.8"/>
                    </svg>
                </div>
            </div>
        </div>
        
        <!--Waves Container-->
        <div class="waves-wrapper">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->
    </div>
</section>
<section class="boxes mb-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="boxes__item dash-bordered" style="background-image: url('<?php echo get_template_directory_uri().'/assets/images/boxes-mask.png'; ?>')">
                    <div class="boxes__item--content">
                        <h2 class="title">Text</h2>
                        <div class="text">
                            <p>Simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                    <div class="boxes__item--img">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/boy.png' ?>" alt="">
                    </div>
                    <div class="boxes__item--overlay"></div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="boxes__item dash-bordered" style="background-image: url('<?php echo get_template_directory_uri().'/assets/images/boxes-mask.png'; ?>')">
                    <div class="boxes__item--content">
                        <h2 class="title">Text</h2>
                        <div class="text">
                            <p>Simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                    <div class="boxes__item--img">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/boy.png' ?>" alt="">
                    </div>
                    <div class="boxes__item--overlay"></div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="boxes__item dash-bordered" style="background-image: url('<?php echo get_template_directory_uri().'/assets/images/boxes-mask.png'; ?>')">
                    <div class="boxes__item--content">
                        <h2 class="title">Text</h2>
                        <div class="text">
                            <p>Simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                    <div class="boxes__item--img">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/boy.png' ?>" alt="">
                    </div>
                    <div class="boxes__item--overlay"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="products py-5">
    <?php
    $section_products = get_field('produkty');
    $title = $section_products['title'];
    $text = $section_products['text'];
    $product_ids = $section_products['products'];
    ?>
    <div class="container mb-5">
        <h2 class="title text-center mb-3">
            <?php echo $title; ?>
        </h2>
        <div class="text d-block text-cropped text-center mx-auto">
            <p><?php echo $text; ?></p>
        </div>
    </div>
    <div class="container products__wrapper mt-5">
        <div class="row g-5">
        <?php foreach($product_ids as $product_id) : ?>
            <?php
            $product = wc_get_product($product_id);
            $price = $product->get_regular_price();
            $sale_price = $product->get_sale_price();
            $name = $product->get_name();
            $image = $product->get_image();    
            $link = $product->get_permalink();
            ?>
            <div class="col-6 col-md-3">
                <a href="<?php echo $link; ?>" class="product-card mb-3 px-4">
                    <div class="product-card__image mb-3 text-center">
                        <?php echo $image ?>
                    </div>
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
        <?php endforeach; ?>
        </div>
        <div class="text-center">
        <a href="#" class="site-btn site-btn__yellow dash-bordered mt-5">
            Zobacz więcej
        </a>
        </div>
    </div>
</section>
<section class="logos mb-5 py-5">
    <?php
    $logos = get_field('logos')['logos'];
    ?>
    <div class="container">
        <div class="logos-wrapper row">
            
            <?php foreach ($logos as $logo) : ?>
                <div class="col">
                    <a href="<?php echo $logo['link'] ?>" class="d-flex align-items-center justify-content-center">
                        <img src="<?php echo $logo['logo']; ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>
<section class="text-section mb-5 py-5">
    <?php
    $content = get_field('text_section_1');
    ?>
    <div class="container text-section__first text-white">
        <div class="row gx-5">
            <div class="col-12 col-md-6 my-5">
                <div class="text-section__content my-5 pe-5">
                    <h2 class="title mb-4"><?php echo $content['title'] ?></h2>
                    <div class="text">
                        <?php echo $content['text'] ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex h-100 justify-content-center align-items-center ps-5">
                    <div class="text-center">
                        <a href="<?php echo $content['btn_link']; ?>" class="site-btn site-btn__yellow dash-bordered">
                            <?php echo $content['btn_text']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-section__background">
        <div class="col-12 col-md-6 bg-yellow">

        </div>
        <div class="col-12 col-md-6 text-section__background--img" style="background-image: url('<?php echo $content['img']; ?>')">
            
        </div>
    </div>
</section>
<section class="text-section mb-5 py-5">
    <?php
    $content = get_field('text_section_2');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="h-100">
                    <img class="w-100 max-h-100" src="<?php echo $content['img']; ?>" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="ps-5 text-section__second--content h-100 d-flex flex-column justify-content-center">
                    <h2 class="title mb-4">
                        <?php echo $content['title']; ?>
                    </h2>
                    <div class="text mb-5">
                        <?php echo $content['text']; ?>
                    </div>
                    <div class="text-start">
                        <a href="<?php echo $content['btn_link']; ?>" class="site-btn site-btn__yellow dash-bordered">
                            <?php echo $content['btn_text']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-section mb-5 py-5">
    <?php
    $content = get_field('text_section_3');
    ?>
    <div class="container text-section__first text-white">
        <div class="row gx-5">
            <div class="col-12 col-md-6 my-5">
                <div class="text-section__content my-5 pe-5">
                    <h2 class="title mb-4"><?php echo $content['title'] ?></h2>
                    <div class="text">
                        <?php echo $content['text'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-section__background">
        <div class="col-12 col-md-6 bg-yellow">

        </div>
        <div class="col-12 col-md-6 text-section__background--img" style="background-image: url('<?php echo $content['img']; ?>')">
            
        </div>
    </div>
</section>
<section class="more-products">
    <div class="container">
        <?php
        $section_products = get_field('more_products');
        $title = $section_products['title'];
        $text = $section_products['text'];
        $product_ids = $section_products['products'];
        ?>
        <div class="container mb-5">
        <h2 class="title text-center mb-3">
            <?php echo $title; ?>
        </h2>
        <div class="text d-block text-cropped text-center mx-auto">
            <p><?php echo $text; ?></p>
        </div>
    </div>
    <div class="container products__wrapper mt-5">
        <div class="row g-5">
        <?php foreach($product_ids as $product_id) : ?>
            <?php
            $product = wc_get_product($product_id);
            $price = $product->get_regular_price();
            $sale_price = $product->get_sale_price();
            $name = $product->get_name();
            $image = $product->get_image();    
            $link = $product->get_permalink();
            ?>
            <div class="col-6 col-md-3">
                <a href="<?php echo $link; ?>" class="product-card mb-3 px-4">
                    <div class="product-card__image mb-3 text-center">
                        <?php echo $image ?>
                    </div>
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
        <?php endforeach; ?>
        </div>
        <div class="text-center">
        <a href="#" class="site-btn site-btn__yellow dash-bordered mt-5">
            Zobacz więcej
        </a>
        </div>
    </div>
    </div>
</section>
<?php get_footer(); ?>