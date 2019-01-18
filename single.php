<?php get_header(); ?>
    <!-- <div class=contentAllSingle> -->
        <div class="mainSingle container col-10">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <span class="categorySingle col-7"> <?php the_category() ?></span>
            <h1 class="titleSingle col-7"><?php the_title(); ?></h1>
            <div  class="imageSingle col-7">
                <figure><?php the_post_thumbnail() ?></figure>
            </div>
                <div class="col-7">
                        <div class="contentSociauxLogo">
                            <div class="farmerDog">
                                <figure class="logoFarmer"><i class="fas fa-dog"></i></figure>
                                <span class="byFarmer">by :</span><span class="farmerText"> the farmer's dog  |</span>
                            </div>
                            <div class="contentSociaux">
                                <span class="commentFarmer"><i class="fas fa-comment"></i>comment</span>
                                <span class="shareFarmer">share </span>
                                <span class="sociauxFarmer">
                                    <div class="farmerFacebook"><i class="fab fa-facebook-f"></i></div>
                                    <div class="farmerTwitter"><i class="fab fa-twitter"></i></div>
                                    <div class="farmerPinterest"><i class="fab fa-pinterest-p"></i></div>
                                </span>
                            </div>
                        </div>
                        <div class="singleContent col-lg-12">
                            <?php the_content(); ?>
                        </div>
                        <div class="contentSociauxComment col-lg-12">
                            <span class="shareComment">share </span>
                                <span class="commentComment"><i class="fas fa-comment"></i>comment</span>
                                <span class="sociauxComment">
                                    <div class="commentFacebook"><i class="fab fa-facebook-f"></i>Share</div>
                                    <div class="commentTwitter"><i class="fab fa-twitter"></i>Tweet</div>
                                    <div class="commentPinterest"><i class="fab fa-pinterest-p"></i>Pint it</div>
                                </span>
                            </div>
                        <div class="post-comments">
                            <?php 
                            comments_template(); 
                            ?> 
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
    <div class="contentPub col-2">test</div>
<!-- </div> -->
