<?php

/**
 * Footer of Theme
 */

if(! defined('ABSPATH')){
		return;
}
?>

	<footer class="site-footer">
		<p class="copyrigth">
			<?php echo __('Copyrigth &copy;','st').' '.get_bloginfo('name');?>
		</p>
	</footer>


	<?php wp_footer();?>
</body>
</html>