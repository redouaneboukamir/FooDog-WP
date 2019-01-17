<?php 
get_header();
?>
<div class="contentLoopViews col-10">
<?php get_template_part('loop','views');?>
</div>
<div class="contenuLoopSticky col-10">
    <?php get_template_part('loop','sticky');?>
</div>
<div class="contenuLoop col-10">
    <?php get_template_part('loop');?>
</div>
</div>
<?php
get_footer();
?>