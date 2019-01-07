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
?>