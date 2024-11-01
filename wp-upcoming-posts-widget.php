<?php
/**
 * @package Upcoming posts widget
 */
/*
Plugin Name: Upcoming posts widget
Plugin URI: https://dallaslu.com/wordpress-upcoming-posts-widget/
Description: List the upcoming posts on your WordPress as a widget.
Version: 0.8.3
Author: Dallas Lu
Author URI: https://dallaslu.com/
License: GPLv2 or later
*/
include_once dirname( __FILE__ ) . '/WP_Widget_Upcoming_Posts.php';

function wp_widget_upcoming_posts_init() {
	load_plugin_textdomain( 'wp-upcoming-posts-widget', false, basename( dirname( __FILE__ ) ) . '/lang' );
}
add_action('plugins_loaded', 'wp_widget_upcoming_posts_init');

function upcoming_posts_widget_init() {
	register_widget( 'WP_Widget_Upcoming_Posts' );
}
add_action( 'widgets_init', 'upcoming_posts_widget_init' );