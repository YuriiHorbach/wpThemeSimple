<?php

	/**
	 * Index file
	 */
	get_header();

		if ( have_posts() ) : 
		    while ( have_posts() ) : the_post(); ?>
		         <?php the_title('<h2>','</h2>');?>
		    <?php endwhile; 
	  endif; 
	 ?>

	 <?php
	 	get_footer();
	 ?>
	
