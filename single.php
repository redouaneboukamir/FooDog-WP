
<?php 
get_header(); 
?>

<!--/.Navbar-->

    <!-- <div class=contentAllSingle> -->
        <div class="mainSingle container col-lg-10 col-sm-12 col-xs-12">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <span class="categorySingle col-lg-7"> <?php the_category() ?></span>
            <h1 class="titleSingle col-lg-7"><?php the_title(); ?></h1>
            <div  class="imageSingle col-lg-7">
                <figure><?php the_post_thumbnail() ?></figure>
            </div>
                <div class="col-lg-7">
                        <div class="contentSociauxLogo col-12">
                            <div class="farmerDog">
                                <figure class="logoFarmer"><i class="fas fa-dog"></i></figure>
                                <span class="byFarmer">by :</span><span class="farmerText"> the farmer's dog  |</span>
                            </div>
                            <div class="contentSociaux">
                                <span class="commentFarmer"><i class="fas fa-comment"></i>comment</span>
                                <span class="shareFarmer">share </span>
                                <span class="sociauxFarmer">
                                    <span class="farmerFacebook"><i class="fab fa-facebook-f"></i></span>
                                    <span class="farmerTwitter"><i class="fab fa-twitter"></i></span>
                                    <span class="farmerPinterest"><i class="fab fa-pinterest-p"></i></span>
                                </span>
                            </div>
                        </div>
                        <div class="singleContent col-lg-12">
                            <?php the_content(); ?>
                        </div>
                        <div class="contentSociauxComment col-12">
                            <span class="shareComment col-lg-2 col-12">share </span>
                                <span class="commentComment col-lg-2 col-6"><i class="fas fa-comment"></i>comment</span>
                                
                                    <div class="commentFacebook col-lg-2 col-6"><i class="fab fa-facebook-f"></i>Share</div>
                                    <div class="commentTwitter col-lg-2 col-6"><i class="fab fa-twitter"></i>Tweet</div>
                                    <div class="commentPinterest col-lg-2 col-6"><i class="fab fa-pinterest-p"></i>Pint it</div>
                                
                            </div>
                            <div class="contentSubscribe col-lg-12">
                                <h2>Subscribe to The Digest Newsletter</h2>
                                <p>Get health and wellness tips about your dog delivered to your inbox.</p>
                                <div class="emailSubscribe">your email<span class="signup">Sign up</span></div>
                            </div>
                            <div class="contentPreviousNext col-lg-12">
                                
                                <div class="contentPrevious col-lg-6">
                                   
                                    <span class="descrLien"><?php  previous_post_link('%link', '< PREVIOUS ARTICLE ', TRUE);?></span>
                                    <span class="lien col-12"><?php previous_post_link('%link'); ?></span>
                                </div>
                                <div class="contentNext col-lg-6">
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
                                    
                                        <div class="contentImgTitle col-lg-4 col-sm-8 col-sm-10 col-xs-10">
                                            <figure class="imageLike col-12"><?php the_post_thumbnail(); ?></figure>
                                            <a href="<?php the_permalink()?>"><p><?php the_title(); ?></p></a>
                                        </div>
                                    
                                    <?php endwhile;?>
                            </div>
                        <div class="post-comments">
                            <?php 
                                $args = array(
                                    'fields' => apply_filters(
                                        'comment_form_default_fields', array(
                                            'comment_field' => '<p class="comment-form-comment col-12">' .
                                        '<label for="comment">' . __( '' ) . '</label>' .
                                        '<textarea class="descriComentForm col-12" id="comment" name="comment" placeholder="Write your comment here .." cols="45" rows="8" aria-required="true"></textarea>' .
                                        '</p>',
                                        '<div class="col-12 contentNameEmail">',
                                        'comment_notes_after' => '',
                                            'author' =>'<p class="comment-form-author col-4"><input  class="col-12" id="author" placeholder="Name.." name="author" type="text" value="' .
                                                esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                                                '<label for="author">' . __( '' ) . '</label> ' .
                                                ( $req ? '<span class="required">*</span>' : '' )  .
                                                '</p>'
                                                ,
                                            'email'  => '<p class="comment-form-email col-4">' . '<input class="col-12" id="email" placeholder="Email.." name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                                                '" size="30"' . $aria_req . ' />'  .
                                                '<label for="email">' . __( '' ) . '</label> ' .
                                                ( $req ? '<span class="required">*</span>' : '' ) 
                                                 .
                                                '</p>',
                                            'url'    => '<p class="comment-form-url col-4">' .
                                             '<input class="col-12" id="url" name="url" placeholder="Website.." type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
                                            '<label for="url">' . __( '', 'domainreference' ) . '</label>' .
                                               '</p>',
                                               '</div>'
                                        )
                                    ),
                                    
                                    // 'title_reply' => '<div class="crunchify-text titreComentForm"> <h5>Leave a response</h5></div>'
                                );
                            comment_form($args) ;
                            ?> 

                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
    </div>
    
<!-- </div> -->
<?php get_footer(); ?>
