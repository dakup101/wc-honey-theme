<?php

function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Pasek Boczny', 'honey-theme' ),
        'id'            => 'default-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Pasek Boczny (Sklep)', 'honey-theme' ),
        'id'            => 'sidebar',
        'before_widget' => '<div class="shop-sidebar__item"><div id="%1$s" class="shop-sidebar__item--widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="shop-sidebar__item--title">',
        'after_title'   => '</h3>',
    ) );
}

add_action( 'init', 'themename_widgets_init');