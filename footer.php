<?php

/**
 * Footer of Theme
 */

if(! defined('ABSPATH')){
		return;
}
?>

	<footer class="site-footer">

		 <?php if ( is_active_sidebar( 'footer1' ) ) : ?>
		 	<div class="sidebar-footer">
		        <?php dynamic_sidebar( 'footer1' ); ?>
	        </div>
	    <?php endif; ?>

		<?wp_nav_menu( array( 'theme_location' => 'footer', 'fallback_cb' => false, 'menu_class' => 'menu footer_menu' ) );?>
		<p class="copyrigth">
			<?php echo __('Copyrigth &copy;','st').' '.get_bloginfo('name');?>
		</p>

		
				
	</footer>
	

	<?php wp_footer();?>      
</body>
</html>