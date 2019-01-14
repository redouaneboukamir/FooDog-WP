<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta type="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<!-- search pop-up-->
<div class="fooDog_pop_up">
    <div class="fooDog_searchWindow">
    ezvsdvdsvsdvdvsvsdvsdvsdvsdvsdv
    </div>
</div>
<!-- page layout -->
<div class="fooDog_social col-12">    
    <nav class="fooDog_socialNav">
        <?php wp_nav_menu(array('theme_location' => 'fooDog_socialNavList', 'menu_class' => 'fooDog_socialNavList')); ?>
    </nav>
</div>
<div class="fooDog_content_header">
    <header class="header">
        <div class="row">
            <div class="fooDog_title col-12">
                <h1 class="fooDog_name"><?php bloginfo('name'); ?></h1>
            </div>
        </div>
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="fooDog_main collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu(array('theme_location' => 'fooDog_mainNavList', 'menu_class' => 'fooDog_mainNavList navbar-nav mr-auto col-8 offset-2', 'container' => '')); ?>
                </div>
            </nav>
        </div>
    </header>
