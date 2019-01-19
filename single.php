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
                                
                                    <div class="commentFacebook"><i class="fab fa-facebook-f"></i>Share</div>
                                    <div class="commentTwitter"><i class="fab fa-twitter"></i>Tweet</div>
                                    <div class="commentPinterest"><i class="fab fa-pinterest-p"></i>Pint it</div>
                                
                            </div>
                            <div class="contentSubscribe col-lg-12">
                                <h2>Subscribe to The Digest Newsletter</h2>
                                <p>Get health and wellness tips about your dog delivered to your inbox.</p>
                                <div class="emailSubscribe">your email<span class="signup">Sign up</span></div>
                            </div>
                            <div class="contentPreviousNext col-lg-12">
                                
                                <div class="contentPrevious col-6">
                                   
                                    <span class="descrLien"><?php  previous_post_link('%link', '< PREVIOUS ARTICLE ', TRUE);?></span>
                                    <span class="lien col-12"><?php previous_post_link('%link'); ?></span>
                                </div>
                                <div class="contentNext col-6">
                                    <span class="descrLien"><?php  next_post_link('%link', 'NEXT ARTICLE >', TRUE);?></span>
                                    <span class="lien col-12"><?php next_post_link('%link'); ?></span>
                                </div>
                            </div>
                            <div class="farmerDogSingle col-12">
                                <div class="logoFarmerSingle col-2"><i class="fas fa-dog"></i></div>
                                    <section class="textFarmerSingle col-10">
                                    <h3>The Farmer's Dog</h3>
                                    <p>The Farmer’s Dog is the leading direct-to-consumer, fresh pet food company, offering customers 
                                        and their pets the highest quality and convenience without retail markups. All human-grade 
                                        meal plans are made to order, designed by veterinarians, and personalized to provide the ideal 
                                        nutritional balance for every dog. Get started today at https://www.thefarmersdog.com/.</p>
                                </section>
                            </div>
                            <div class="headerPost row col-12">
                                <h6 class="col-4">you mighy also like</h6>
                                <div class="borderHeaderPost col-8"></div>
                            </div>
                            <div class="allMightyLike col-lg-12">
                                <?php
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
                                    while ( $i < 3 && $recentPosts->have_posts() ) : $recentPosts->the_post();	
                                    $i++;
                                    ?>
                                    
                                        <div class="contentImgTitle col-4">
                                            <figure class="imageLike col-12"><?php the_post_thumbnail(); ?></figure>
                                            <a href="<?php the_permalink()?>"><p><?php the_title(); ?></p></a>
                                        </div>
                                    
                                    <?php endwhile;?>
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
<?php get_footer(); ?>
