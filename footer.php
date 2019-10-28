<?php

/**
 * Footer of Theme
 */

if(! defined('ABSPATH')){
		return;
}
?>

	<footer class="site-footer">

		<?wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => false, 'menu_class' => 'menu footer_menu' ) );?>
		<p class="copyrigth">
			<?php echo __('Copyrigth &copy;','st').' '.get_bloginfo('name');?>
		</p>

		
				
	</footer>
	

	<?php wp_footer();?>
</body>
</html>