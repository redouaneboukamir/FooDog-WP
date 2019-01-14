<?php
    function register_my_menus() {
        register_nav_menus(
            array(
                'fooDog_socialNavList' => 'social networks',
                'fooDog_mainNavList' => 'main navbar'
            )
        );
    }
    add_action( 'init', 'register_my_menus' );
    add_theme_support('post-thumbnails');
    // $src = wp_get_attachment_image_src(get_post_thumbnail_id());
    // add_image_size($small, 300,300);
?>