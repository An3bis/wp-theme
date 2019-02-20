<?php 
function themetest_widgets_init() {
	register_sidebar( [
		'name'          => __('Sidebar home', 'themetest'),
		'id'            => 'sidebar-home',
		'description'   => __('Add sidebar to site.', 'themetest'),
	] );
}
add_action('widgets_init', 'themetest_widgets_init');
?>