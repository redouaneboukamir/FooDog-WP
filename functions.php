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


    //css files
    function fooDog_enqueue_styles(){
        wp_enqueue_style('css_fontawesome', get_template_directory_uri()."/assets/css/all.css");
        wp_enqueue_style('css_bootstrap', get_template_directory_uri()."/assets/css/bootstrap.min.css");
        wp_enqueue_style('css_style', get_template_directory_uri()."/style.css");
    }
    add_action('enqueue_styles', fooDog_enqueue_styles());
    //js files
    function fooDog_enqueue_scripts(){
        wp_enqueue_script('js_jquery', get_template_directory_uri()."/assets/js/jquery.min.js");
        wp_enqueue_script('js_bootstrap', get_template_directory_uri()."/assets/js/bootstrap.min.js");
        wp_enqueue_script('js_script', get_template_directory_uri()."/assets/js/script.js");
    }
    add_action('enqueue_scripts', fooDog_enqueue_scripts());
    function count_post_visits() {
        if( is_single() ) {
        global $post;
        $views = get_post_meta( $post->ID, 'my_post_viewed', true );
        if( $views == '' ) {
        update_post_meta( $post->ID, 'my_post_viewed', '1' ); 
        } else {
        $views_no = intval( $views );
        update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
        }
        }
       }
       add_action( 'wp_head', 'count_post_visits' );
       function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>