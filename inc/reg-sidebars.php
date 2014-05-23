<?php 

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));
	register_sidebar(array(
		'name' => 'Home1',
		'id' => 'home1',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));
	register_sidebar(array(
		'name' => 'Home2',
		'id' => 'home2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));
	register_sidebar(array(
		'name' => 'Home3',
		'id' => 'home3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));
	register_sidebar(array(
		'name' => 'Home4',
		'id' => 'home4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));
	register_sidebar(array(
		'name' => 'Home5',
		'id' => 'home5',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));
	register_sidebar(array(
		'name' => 'Home6',
		'id' => 'home6',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));
	register_sidebar(array(
		'name' => 'Home7',
		'id' => 'home7',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));
	
}


?>