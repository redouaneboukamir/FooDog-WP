
     <footer>

<!-- categorie-->
<div class="container">
   <div class="row">     
            <div class="col-4">
                <h5 class="titlecategories">CATEGORIES</h5>
                    <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_class' => 'footercategories')); ?>
            </div>
        

<!-- Populaire-->

<div class="col-sm">
                    <div><h5 class="populartitle">POPULAR POST</h5></div>
                    <?php

                $recentPosts = new WP_Query();

                $sticky = get_option('sticky_posts');

                $args = array(
                
                'order' => 'DSC',
                
                'orderby' => 'date',
                
                'post__in' => $sticky,
                
                );

                $recentPosts->query($args);

                ?>

                    <div class="row ">
                        <?php $i = 0; while ($recentPosts->have_posts() && $i < 3) : $recentPosts->the_post();?>
                        <article class="col-sm-12">
                            <div class="row">
                            <?php if ( has_post_thumbnail()) : ?>
                            <a href="" class="imgpopular" title=»<?php the_title_attribute(); ?> » >
                                <?php the_post_thumbnail(); ?></a>
                                <div class="col-sm-6">
                            <h5 class="titlearticle"><a href="" title=»<?php the_title_attribute(); ?> »>
                                    <?php the_title(); ?></a></h5>
                                    </div>
                            <?php endif ?>
                        </article>




                        <?php $i++; endwhile ?>
                    </div>
                </div>


<!-- Instagram -->

		<div class="col-4">
 			<h5 class="titleinstagram">INSTAGRAM</h5>

			<div class="footerinstagram">

                    <!-- InstaWidget http://instawidget.net/generate -->

					<!-- InstaWidget -->
					<a href="https://instawidget.net/v/tag/thefarmersdog" id="link-ecca6a11a9d748dfb477c0a29b801553a72910fe39d1b9a0eab0d1b382d489be">#thefarmersdog</a>
					<script src="https://instawidget.net/js/instawidget.js?u=ecca6a11a9d748dfb477c0a29b801553a72910fe39d1b9a0eab0d1b382d489be&width=250px"></script>
			</div>
		</div>
	</div>
</div>

        

        <div class="footerreseaux">
            <div class="col-12">
                <div class="alignementreaseaux m-0 p-0 d-flex">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <h5 class="url">FooDog.BeCode</h5>
        </div>



    </footer>
    <?php wp_footer(); ?>
    </body>
</html>