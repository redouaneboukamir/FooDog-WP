<?php get_header(); ?>
    <div class="mainSingle container col-10">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <span class="categorySingle col-7"> <?php the_category() ?></span>
        <h1 class="titleSingle col-7"><?php the_title(); ?></h1>
        <div  class="imageSingle col-7">
            <figure><?php the_post_thumbnail() ?></figure>
        </div>
            <div class="col-7">
            
                    <div class="singleContent">
                        <?php the_content(); ?>
                    </div>
                    
                    <div class="post-comments">
                        <!-- <?php 
                        // comments_template(); 
                        ?> -->
                        <!-- Posté le  -->
                        <?php 
                        // the_date(); 
                        ?> 
                        <!-- dans  -->
                        <?php 
                        // the_category(', '); 
                        ?>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
</div>
