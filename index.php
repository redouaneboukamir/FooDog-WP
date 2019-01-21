<?php 
get_header();
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("rechercher") ) : 
endif;
?>

<div class="contentLoopViews col-lg-10 col-12">
<?php get_template_part('loop','views');?>
</div>
<div class="contenuLoopSticky col-lg-10 col-12">
    <?php get_template_part('loop','sticky');?>
</div>
<div class="contenuLoop col-lg-10 col-12">
    <?php get_template_part('loop');?>
</div>

</div>

<?php
get_footer();
?>