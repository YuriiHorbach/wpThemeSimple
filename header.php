<?php

/**
 * Header of our theme
 */

if(! defined('ABSPATH')){
		return;
}

$site_tag = 'h1';

if(is_singular()){
	$site_tag = 'span';
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
				<<?php echo $site_tag;?> class="site-title">

					<a href="<?php echo home_url();?>"><?php echo get_bloginfo('name','display');?>
					</a>
					
				</<?php $site_tag;?>> 
				<?php 
					wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => false, 'menu_class' => 'menu site_menu' ) );
				?>
<p></p>

			</header>

