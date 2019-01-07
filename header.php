<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta type="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<!-- search pop-up-->
<div class="fooDog_pop_up">
nvjdsnfjndjvlndsjnvjdnvjdsnvnjdnvjqdsn
</div>
<!-- page layout -->
<div class="fooDog_social col-12">    
    <nav class="fooDog_socialNav debug">
        <?php wp_nav_menu(array('theme_location' => 'fooDog_socialNavList', 'menu_class' => 'fooDog_socialNavList debug')); ?>
    </nav>
</div>
<div class="fooDog_content debug">
    <header class="header">
        <div class="row">
            <div class="fooDog_title col-12">
                <h1 class="fooDog_name"><?php bloginfo('name'); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="fooDog_main col-12">
                <nav class="fooDog_mainNav">
                    <?php wp_nav_menu(array('theme_location' => 'fooDog_mainNavList', 'menu_class' => 'fooDog_mainNavList')); ?>
                </nav>
            </div>
        </div>
    </header>
