<?php

/**
 * Header of our theme
 */

if(! defined('ABSPATH')){
		return;
}

?>

<!DOCTYPE html>
<html lang="en">
		<head>
			<?php wp_head();?>
		</head>
		<body <?php body_class(); ?>>

			<header class="site-header">
				<!-- show blog page info  -->
				<h1><?php echo get_bloginfo('name','display');?></h1> 
				<?php 
					wp_nav_menu( array( 'theme_location' => 'primary' 'fallback_cb' => false ) );
				?>


			</header>