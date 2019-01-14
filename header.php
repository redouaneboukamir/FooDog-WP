<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta type="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">

    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
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
</div>
<div class="fooDog_content_header">
    <header class="header">
        <div class="row">
            <div class="fooDog_title col-12">
                <h1 class="fooDog_name"><?php bloginfo('name'); ?></h1>
            </div>
        </div>
        <div class="row">

                <nav class="fooDog_mainNav col-12">
                    <?php wp_nav_menu(array('theme_location' => 'fooDog_mainNavList', 'menu_class' => 'fooDog_mainNavList')); ?>
                </nav>
            </div>

        <?php 
        $before = '<h4 class="titleSticky">';
        $after = "</h4>";
                
            
               $recentPosts = new WP_Query();
               $sticky = get_option('sticky_posts');
               $args = array(
                   'posts_per_page' =>4,
                   'orderby' => 'date',
                   'order' => 'DESC',
                   'post__in' => $sticky
                   );
                $recentPosts->query($args);
                $i = 0;
                ?>
                <div class="headerPost row col-8">
                            <h6 class="col-3">Featured posts</h6>
                            <div class="borderHeaderPost col-9"></div>
                </div>
                <?php
                   while ( $i < 3 && $recentPosts->have_posts() ) : $recentPosts->the_post();	
                   $i++;
                   ?>
                   <div class="contentStickyPost col-8">
                       
                        <div class="stickyPost row"> 
                            <figure class="imageSticky col-5"><?php 
                            if(has_post_thumbnail()){
                                
                                the_post_thumbnail();
                            }
                            
                             ?></figure>
                             <div class="contentArticleSticky col-7">
                                <span class="categorySticky"><?php the_category();?> </span>
                                <?php  the_title($before,$after);?>
                                <?php the_content(); ?>
                                <div class="contentShare">
                                    <span class="shareIcon"><i class="fas fa-share"></i></span>
                                    <span class="shareText">Share</span>
                                </div>
                            </div>
                        </div>

               </div>
              <?php endwhile;?>

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

  