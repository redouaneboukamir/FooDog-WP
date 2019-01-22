<?php get_header();?>

<!-- <div class="contentAllAll"> -->
<div class="contentAllCategoryPub container">
        <div class="contentAllCategoryPost col-8">
    <?php
//setup pour la pagination avec WP_Query (permet aussi de configurer les articles à afficher comme l'ordre, le nombre d'article maximum, ect...)
$pageCat = get_query_var("paged");
$CategoryPost_args = array(
    "posts_per_page" => 8,
    "paged" => $pageCat,
    "orderby" => "date",
    //"category_name" => the_category(),
    "order" => "DESC",
);
$CategoryPost = new WP_Query($CategoryPost_args);
//fin de setup de la pagination
if ($CategoryPost->have_posts()): while ($CategoryPost->have_posts()): $CategoryPost->the_post();
        ?>
<!-- Ensemble du traitement et affichage de stickypost -->
<?php
$before = '<h4 class="titleCategory">';
$after = "</h4>";
        ?>
		<div class="contentCategoryPost ">
			<div class="categoryPost row">
				<figure class="imageCategory col-12 col-md-5">
<?php
if (has_post_thumbnail()) {	
	the_post_thumbnail();
} else { //Place automatiquement un thumbnail, si aucun ne sont présent
            echo ('<img src="https://news.nationalgeographic.com/content/dam/news/2018/05/29/dog-baby-talk/01-dog-baby-talk-NationalGeographic_2283205.ngsversion.1527786004161.adapt.1900.1.jpg" alt="">');
        }
?>
		</figure>
			<div class="contentArticleCategory col-12 col-md-7">
				<span class="categoryCategory"><?php the_category();?> </span>
				<a class="pubCategory" href="<?php the_permalink()?>"><?php the_title($before, $after);?></a>
<?php
        $more = 30;
        $aftermore = false;
        // the_content($more,$aftermore);
        the_excerpt();
        ?>
				<div class="contentShareCat">
					<span class="shareIconCat"><i class="fas fa-share"></i></span>
					<span class="shareTextCat">Share</span>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile;?>
	</div>
	<div class="pubCategory col-5 col-md-4">
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
			<div class="col-12">
				<img class="img-fluid" src="https://www.wanimo.com/images/alimentation_pour_chien/A/00/A00EK07/500x500/01/royal-canin-breed-nutrition-shih-tzu.jpg" alt="Pub pour de la nourrture pour chien">
            </div>
            <div class="col-12 col-md-6 offset-md-3">
                <button class="pubButtonCat">Try Now</button>
            </div>
            <div class="col-12 row ">
                <div class="catCircle col-12 col-md-5 d-flex align-items-center"><p>THE FAMERS DOG</p></div>
                <div class="catText-1 col-12 col-md-7">REAL PET FOOD MADE FRESH DELIVERED</div>
            </div>
            <div class="col-12 row">
                <div class="col-6"></div>
                <div class="catText-2 col-6"><p>*Cute Dog not include</p></div>
            </div>
		</div>
	</div>
</div>
<?php endif;?>
    <div class="contentPagination col-lg-8">
        <span class="pagination col-12">
            <?php
//pagination
//$paginationCat créer les arguments
$paginationCat = array(
    "prev_text" => __("<"),
    "next_text" => __(">"),
);
//echo la pagination avec les arguments setup préalablement
echo paginate_links($paginationCat);
?>
        </span>
<?php get_footer();?>