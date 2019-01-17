
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
                <div class="headerPost row col-8">
                            <h6 class="col-3">Featured posts</h6>
                            <div class="borderHeaderPost col-9"></div>
                </div>
                <div class="contentAllStickyPub container">
                    
                    <div class="contentAllStickyPost col-8">
                    <?php
                    // Boucle sur les sticky post
                    while ( $i < 3 && $recentPosts->have_posts() ) : $recentPosts->the_post();	
                    $i++;
                    ?>
                    <div class="contentStickyPost ">
                        
                            <div class="stickyPost row"> 
                                <figure class="imageSticky col-5"><?php 
                                if(has_post_thumbnail()){
                                    
                                    the_post_thumbnail();
                                }
                                
                                ?></figure>
                                <div class="contentArticleSticky col-7">
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
                    <div class="pubSticky col-4">
                        <div class="contentSociaux col-12">
                            <div class="facebookSlide col-12">
                                <span>Facebook</span>
                            </div>
                            <div class="twitterSlide col-12">
                                <span>Twitter</span>
                            </div>
                            <div class="instaSlide col-12">
                                    <span>Instagram</span>
                            </div>
                        </div>
                    </div>

</div>