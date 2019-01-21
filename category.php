<?php 
    
get_header();?>
<!-- <div class="contentAllAll"> -->
    <span class="titleCat col-12"><h2><?php single_cat_title();?></h2></span>
    <div class="contentAllCategoryPub container">
        <div class="contentAllCategoryPost col-8">
    <?php
    if (have_posts()) :
            while (have_posts()) : the_post(); 
            ?>

        <!-- Ensemble du traitement et affichage de stickypost -->
        <?php 
                    $before = '<h4 class="titleCategory">';
                    $after = "</h4>";
                    ?>
                    
                            <div class="contentCategoryPost ">
                                
                                    <div class="categoryPost row"> 
                                        <figure class="imageCategory col-5"><?php 
                                        if(has_post_thumbnail()){
                                            
                                            the_post_thumbnail();
                                        }
                                        
                                        ?></figure>
                                        <div class="contentArticleCategory col-7">
                                            <span class="categoryCategory"><?php the_category();?> </span>
                                            <a href="<?php the_permalink()?>"><?php  the_title($before,$after);?></a>
                                            <?php 
                                            $more = 30;
                                            $aftermore = false;
                                            // the_content($more,$aftermore); 
                                            the_excerpt();
                                            ?>
                                            <div class="contentShare">
                                        <span class="shareIcon"><i class="fas fa-share"></i></span>
                                        <span class="shareText">Share</span>
                                    </div>
                                        </div>
                                    </div>
                                    
                            </div>
                            
                            
                            <?php endwhile;?>
                        </div>
                        <div class="pubCategory col-3">
                        <div class="contentSociaux col-12">
                            <div class="facebookSlide col-12">
                            <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </div>
                            <div class="twitterSlide col-12">
                            <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </div>
                            <div class="instaSlide col-12">
                            <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                            </div>
                        </div>
                        <figure><img src=""></figure>
                    </div>

                        
    </div>

    <?php endif; get_footer();?>
    <!-- <div class="col-2">fzesv</div> -->
<!-- </div> -->
                            