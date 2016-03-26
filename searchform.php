<?php
/**
 * Search form template
 *
 * @package BPaz
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="s" class="assistive-text"><?php _e( 'Search', 'bpaz' ); ?></label>
	<input type="text" class="field" name="s" id="s" placeholder="" />
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'SEARCH', 'bpaz' ); ?>" />
</form>
