<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_category(); 
		//
		// Post Content here
		//
	} // end while
} // end if
?>