<?php

// register the main navigation

register_nav_menus();


// register the sidebar-widgets

register_sidebar(array(
		'before_widget' => '<div class="sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<div class="title">',
		'after_title' => '</div>',
	));


// change the length of the post excerpts

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// change the ellipse to "Read More" at the end of the post excerpts

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


?>