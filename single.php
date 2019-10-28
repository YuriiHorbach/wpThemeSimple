<?php

	/**
	 * Single php file
	 */
	get_header(); ?>

	<div class="container">	
		<?php	if ( have_posts() ) : 
			    while ( have_posts() ) : the_post(); ?>


					
						<article <?php post_class();?> id = "<?php echo get_the_id();?>">
							<header class="article-header">
						<?php
							
								 the_title('<h2>', '</h2>');
								 // the_author_link();
								 // the_author_posts_link();
								 $link = get_author_posts_url( get_the_author_meta( 'ID' ) );

								 if($link){
								 		_e('Written by: ', 'st');
								 		echo '<a href="'.$link.'">'.get_the_author().'</a>';
								 } else{
								 	the_author();
								 }
							
							
						?>
								
							</header>
							<?php the_content();?>

							<footer>
								<div class="article-meta">
									<?php echo get_the_date();?>
									<?php the_category();?>
									<?php the_tags();?>

								</div>	
							</footer>

						</article>
					

			        
			    <?php endwhile; 
		  endif; 
		 ?>
	</div>
<?php get_footer(); ?>

