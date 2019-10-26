<?php

	/**
	 * Index file
	 */
	get_header(); ?>

	<div class="container">	
		<?php	if ( have_posts() ) : 
			    while ( have_posts() ) : the_post(); ?>


					
						<article <?php post_class();?> id = "<?php echo get_the_id();?>">
							<header class="article-header">
						<?php
							if( is_singular()){
								the_title('<h1>',  '</h1>');
							}
							else{
								 the_title('<h2> <a href = "'. get_permalink().'">',  '</a></h2>');
							}
							
						?>
								<div class="article-meta">
									<?php echo get_the_date();?>
									<?php the_category();?>
									
								</div>	
							</header>
							<?php the_content();?>
						</article>
					

			        
			    <?php endwhile; 
		  endif; 
		 ?>
	</div>
<?php get_footer(); ?>

