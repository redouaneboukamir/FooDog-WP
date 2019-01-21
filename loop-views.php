<?php 
    //boucle sur les articles  le plus vues
    $popular_posts_args = array(
        'posts_per_page' => 3,
        'meta_key' => 'my_post_viewed',
        'orderby' => 'meta_value_num',
        'order'=> 'DESC'
       );
        
       $popular_posts_loop = new WP_Query( $popular_posts_args );
        $i=0;
            ?>
            <div class="contentAllArticleViews row container">
            <?php
            
        while( $popular_posts_loop->have_posts() && $i < 1):
            $i++;
            $popular_posts_loop->the_post();
           
            ?>
                <div class="firstArticleView row col-lg-6 col-xs-12 col-sm-10">
                    <div class="col-12">
                    <figure class="imgFirstView"> <a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?></a></figure>
                    <div class="ensembleCategoryTitre">
                        <span class="categoryView"><?php the_category(); ?></span>
                        <span class="titleFirstView"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></span>
                    </div>
        </div>
                </div>
                <?php   endwhile;?>
                <div class="content4ArticleViews row col-lg-6 col-xs-12 col-sm-10"> 
                <?php
                while($popular_posts_loop->have_posts() && $i >= 1 && $i <= 4):
                    
                    
                        $i++;
                        $popular_posts_loop->the_post();
                    ?>
                
                        <div class="content4articleView col-6">
                            <figure class="imgOtherView"><a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?></a></figure>
                            <span class="title4View"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></span>
                        </div>
                    <?php endwhile;  ?>
                </div>


       </div>
       <?php
       wp_reset_query();
    ?>
    


    