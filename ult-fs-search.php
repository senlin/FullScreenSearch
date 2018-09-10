<?php
/*
Plugin Name: FullScreen Search
Plugin URI: https://github.com/senlin/FullScreenSearch
Description: Fork of the FullScreenSearch plugin (https://github.com/ultimatumtheme/FullScreenSearch) that adds a Full Screen Search Modal Box
Version: 1.1
Author: SO WP
Author URI: https://so-wp.com
License: GPL3 or later
*/

if( is_admin() ) {

} else {

	add_action( 'init', 'fullscreen_search_init' );
	add_action( 'wp_footer', 'ult_fs_search' );

}

function fullscreen_search_init(){

	add_action ( 'wp_enqueue_scripts', 'fullscreen_search_add_scripts' );

}

function fullscreen_search_add_scripts() {
	wp_enqueue_script( 'ult-fs-search-js', plugins_url( 'assets/js/ult-fs-search.js', __FILE__ ), array( 'jquery' ), null, true );
	wp_enqueue_style( 'ult-fs-search-css', plugins_url( 'assets/css/ult-fs-search.css', __FILE__ ) );
}

function ult_fs_search(){
	?>
	<div id="ult-fs-search">
		<button type="button" class="close">&times;</button>
		<form role="search" class="form-search" method="get" id="searchform" action="<?php echo home_url( '/' );?>" >
			<input type="text" value="" name="s" placeholder="<?php _e( 'Type keyword(s) here', 'ult-fs-search' ); ?>" />
		</form>
	</div>
<?php
}
