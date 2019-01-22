<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta type="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>style.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body id="body">
<!-- search pop-up-->
<div class="fooDog_pop_up">

</div>
<!-- page layout -->
<div class="fooDog_social col-12">    
    <nav class="fooDog_socialNav debug">
        <?php 
        // wp_nav_menu(array('theme_location' => 'fooDog_socialNavList', 'menu_class' => 'fooDog_socialNavList debug')); 
        ?>

    <div class="fooDog_searchWindow">
        
    </div>
</div>
<!-- page layout -->
<div class="fooDog_social col-12">    
    <nav class="fooDog_socialNav">
        <?php wp_nav_menu(array('theme_location' => 'fooDog_socialNavList', 'menu_class' => 'fooDog_socialNavList')); ?>
    </nav>

     <?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
     <!-- <div id="header-widget-area" class="nwa-header-widget widget-area search-widget" role="complementary"> -->
     <?php dynamic_sidebar( 'new-widget-area' ); ?>
     <!-- </div> -->
     <?php endif; ?>
</div>
<div class="fooDog_content_header">
    <header class="header" id="header">
        <div class="row">
            <div class="fooDog_title col-12">
            <h1 class="fooDog_name"><a href="<?php echo get_option('home'); ?>/" ><?php bloginfo('name'); ?></a></h1>
            </div>
        </div>
        <div class="row">

                <nav class="fooDog_mainNav col-12">
                    <?php 
                    // wp_nav_menu(array('theme_location' => 'fooDog_mainNavList', 'menu_class' => 'fooDog_mainNavList'));
                    ?>
                </nav>
            </div>


    
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
    <main class="contentAll" id="main">
        

  