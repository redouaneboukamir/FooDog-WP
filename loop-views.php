<?php 
    //boucle sur les articles  le plus vues
    $popular_posts_args = array(
        'posts_per_page' => 3,
        'meta_key' => 'my_post_viewed',
        'orderby' => 'meta_value_num',
        'order'=> 'DESC'
       );
        
       $popular_posts_loop = new WP_Query( $popular_posts_args );
        $i=0;?>
        <div class="contentAllArticleViews row col-10">
        <?php
       while( $popular_posts_loop->have_posts() && $i < 4):
        $i++;
        $popular_posts_loop->the_post();
        ?>
            <?php
            if($i == 1):?>
            <div class="firstArticleView col-6">
                <figure class="imgFirstView"> <?php the_post_thumbnail(); ?></figure>
                <span class="categoryView"><?php the_category(); ?></span>
                <span class="titleFirstView"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></span>
            </div>
            <?php  ?>
            <?php else : ?>
            <!-- <div class="content4ArticleViews row col-6">  -->
                <div class="4articleView">
                    <?php the_title(); ?>
                </div>
            <!-- </div> -->
            <?php endif;
            
        ?>
            <?php
       endwhile;?>
       </div>
       <?php
       wp_reset_query();
    ?>
    


    