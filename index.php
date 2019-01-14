<!--Insère le header-->
<!--First-->
<?php get_header();?>

<!--Insère la sidebar-->
<?php get_sidebar(); 
//get_search_form(); ?>

<!--Insère le contenu-->
<?php query_posts('posts_per_page=8'); ?>
<?php get_template_part('loop');?>

<!--Insère le footer -->
<!--Last-->
<?php get_footer();?>