<!--Insère le header-->
<!--First-->
<?php get_header();?>

<!--Insère la sidebar-->
<?php //get_sidebar(); 
//get_search_form(); ?>

<?php if (have_posts()): ?>
    <p class="title">
        Hey ! Il y a des Posts !
    </p>
<?php while (have_posts()): the_post();?>
	<div class="post">

	    <h3 class="post-title">
	        <a href="<?php the_permalink();?>"><?php the_title();?></a>
	    </h3>
        <p class="post-info">
            Posté le <?php the_date();?> dans <?php the_category(', ');?> par <?php the_author();?>.
        </p>
        <div class="post-content">
            <?php the_content();?>
        </div>
	</div>
<?php endwhile;?>
<?php else: ?>
<p class="nothing">
    Il n'y a pas de Post à afficher !
</p>
<?php endif;?>

<!--Insère le footer -->
<!--Last-->
<?php get_footer();?>