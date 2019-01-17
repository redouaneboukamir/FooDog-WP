<?php if (have_posts()): ?>
    <h6 class="titleCat">
        <?php the_category(', ');?>
    </h6>

<?php $i = 0//création d'un compteur de la boucle?>

<!--Création des trois button et de la pub-->
<div class="pubCat container-fluid">
    <div class="row">
        <div class="linkPub col-12">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <div><i class="fab fa-facebook-f"></i><p> 1221 Fan</p></div>
                <p>Follow</p>
            </a>
        </div>
        <div class="linkPub col-12">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <div><i class="fab fa-twitter"></i><p> 12221 Followers</p></div>
                <p>Follow</p>
            </a>
        </div>
        <div class="linkPub col-12">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <div><i class="fab fa-instagram"></i><p> 122231 Followers</p></div>
                <p>Follow</p>
            </a>
        </div>
        <div class="imgDivCat col-12">
            <img src="https://www.santevet.com/upload/admin/images/article/tag/gamelle-chien.jpeg" alt="">
        </div>
        <div class="buttonCat">
            <a href="">Try Now</a>
        </div>
    </div>
</div>

<?php while (have_posts()): the_post();?>

	<?php // augmentation du compteur à chaque boucle
    $i += 1;?>

	<div class="postCat postCatContainer">
	    <div class="container-fluid p0">
	        <?php if ($i < 8): //condition permettant d'enlever la petite partie #F7F7F7 en-dessous du dernier (8ème compteur de contenu)?>
		        <div class="row d-flex justify-content-between rowCat">
		        <?php else: ?>
	        <div class="row d-flex justify-content-between">
	        <?php endif; //fin de la condition #F7F7F ?>
            <div class="part1 postCat-thumbnail col-12 col-lg-5 p0">
                <?php if (has_post_thumbnail()): //si un thumbnail est présent
    //the_post_thumbnail(array(245,150)); //affiche le thumbnail
    the_post_thumbnail("large");
else: ?>
                    <img class="img-fluid" src="https://d17fnq9dkz9hgj.cloudfront.net/uploads/2018/03/Pomeranian_01.jpeg" alt="">
                <?php
endif;
?>
            </div>
            <div class="part2 col-12 col-lg-6 p0">
                <div class>
                    <div class="postCat-category">
                        <?php the_category(' ');?>
                    </div>
                </div>
                <h4 class="postCat-title">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </h4>
                    <div class="postCat-content">
                        <?php the_content(' ');?>
                    </div>
                <div class="postCat-SHARE">
                    <a href="#"><i class="fas fa-share"></i><p> SHARE</p> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>
<?php else: ?>
<p class="nothing">
    Il n'y a pas de Post à afficher !
</p>
<?php endif;?>