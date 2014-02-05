<?php
register_nav_menus();

register_sidebar( array(
		'before_widget' => '<div class="sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<div class="title">',
		'after_title' => '</div>'
	));

// Replaces the excerpt "more" text by a link
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
?>