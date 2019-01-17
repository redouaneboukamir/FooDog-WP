

<?php if (have_posts()) : ?>
    <div class="contentAllArticle col-10">
        <?php while (have_posts()) : the_post(); ?>
        
            <div class="contentArticle row col-6"> 
                <figure class="imageArticle col-5"><?php 
                $before = '<h4 class="titleArticle">';
                $after = "</h4>";
                if(has_post_thumbnail()){
                               
                    the_post_thumbnail();
                }
                           
                ?></figure>
                <div class="contentArticleSticky col-7">
                    <span class="categoryArticle"><?php the_category();?> </span>
                    <a href="<?php the_permalink()?>"><?php  the_title($before,$after);?></a>
                    <?php 
                    $more = 30;
                    $aftermore = false;
                    the_content($more,$aftermore); 
                    ?>
                    <div class="contentShare">
                        <!-- <span class="shareIcon"><i class="fas fa-share"></i></span> -->
                        <!-- <span class="shareText">Share</span> -->
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
        <?php else : ?>
            <h1>AUNCUN POST</h1>
        <?php endif; ?>
    </div>