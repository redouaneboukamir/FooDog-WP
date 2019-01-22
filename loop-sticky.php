
    <!-- Ensemble du traitement et affichage de stickypost -->
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
                <div class="headerPost row col-lg-8 col-10">
                            <h6 class="col-3">Featured posts</h6>
                            <div class="borderHeaderPost col-9"></div>
                </div>
                <div class="contentAllStickyPub container">
                    
                    <div class="contentAllStickyPost col-lg-8 col-xs-12 col-sm-12">
                    <?php
                    // Boucle sur les sticky post
                    while ( $i < 3 && $recentPosts->have_posts() ) : $recentPosts->the_post();	
                    $i++;
                    ?>
                    <div class="contentStickyPost ">
                        
                            <div class="stickyPost row"> 
                                <figure class="imageSticky col-lg-5 col-10"><?php 
                                if(has_post_thumbnail()){
                                    
                                    the_post_thumbnail();
                                }
                                
                                ?></figure>
                                <div class="contentArticleSticky col-lg-7 col-sm-9 col-xs-12">
                                    <span class="categorySticky"><?php the_category();?> </span>
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
                    <div class="pubSticky col-lg-3 col-12">
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
                        <?php if ( is_active_sidebar( 'new-widget-pub' ) ) : ?>
                        <!-- <div id="header-widget-area" class="nwa-header-widget widget-area search-widget" role="complementary"> -->
                        <?php dynamic_sidebar( 'new-widget-pub' ); ?>
                        <!-- </div> -->
                        <?php endif; ?>
                    </div>

</div>