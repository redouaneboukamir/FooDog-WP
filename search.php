<div class="latestPost row col-lg-8 col-sm-10 col-xs-12">
    <h6 class="col-3">lastest posts</h6>
    <div class="borderLastestPost col-lg-9 col-sm-10 col-xs-12"></div>
</div>
    <div class="contentAllArticle col-8">
        <?php while (have_posts()) : the_post(); ?>
        
            <div class="contentArticle row col-lg-6 col-sm-10 col-xs-12"> 
                <figure class="imageArticle col-12"><?php 
                ;
                if(has_post_thumbnail()){
                               
                    the_post_thumbnail();
                }
                           
                ?></figure>
                <div class="contentArticleDescr">
                    <span class="categoryArticle"><?php the_category();?> </span>
                    <a href="<?php the_permalink()?>"><?php  
                    $before = '<h4 class="titleArticle col-12">';
                    $after = "</h4>";
                    the_title($before,$after);
                    ?></a>
                    <?php 
                    $more = 30;
                    $aftermore = false;
                    // the_content($more,$aftermore); 
                    the_excerpt();
                    ?>
                    <div class="contentShare">
                        <!-- <span class="shareIcon"><i class="fas fa-share"></i></span> -->
                        <!-- <span class="shareText">Share</span> -->
                    </div>
                </div>
            </div>

        <?php 
                
        endwhile; ?>
 
       
    </div>