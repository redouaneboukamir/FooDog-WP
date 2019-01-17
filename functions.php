
<?php add_theme_support('post-thumbnails'); 
//permet d'activer l'upload d'un thumbnail lors de la création d'un article

//Val 


<?php
    function register_my_menus() {
        register_nav_menus(
            array(
                'fooDog_socialNavList' => 'social networks',
                'fooDog_mainNavList' => 'main navbar',
                'footer-menu' => 'footer categorie'
            ) 
        );
    }
    add_action( 'init', 'register_my_menus' );
    add_theme_support('post-thumbnails');

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
        wp_enqueue_script('popper.js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js');
        wp_enqueue_script('js_bootstrap', get_template_directory_uri()."/assets/js/bootstrap.min.js");
        wp_enqueue_script('js_script', get_template_directory_uri()."/assets/js/script.js");

    }
    add_action('enqueue_scripts', fooDog_enqueue_scripts());
?>

