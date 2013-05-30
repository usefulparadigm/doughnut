<?php
/**
 * The template for displaying search forms in dough
 *
 * @package doughnut
 */
?>
	<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<div class="combo">
		<label for="s" class="screen-reader-text"><?php _ex( 'Search', 'assistive text', 'dough' ); ?></label>
		<input type="text" class="field d_form" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'dough' ); ?>" />
		<input type="submit" class="submit d_btn" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'dough' ); ?>" />
		</div>
	</form>
