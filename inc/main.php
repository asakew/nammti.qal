<?php 
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	// Previous/next page navigation.
	the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'content-none' );

} ?>