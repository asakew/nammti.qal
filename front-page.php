<?php get_header() ?>
<div class="container-fluid">
	<main class="container">
		<section class="my-3">
			<h2 class="display-4 text-center font-weight-bold mb-4">So'ngi yangiliklari </h2>
			<div class="text-center my-3 p-5 bg-white shadow radius">
				<div class="row">
					<?php
					if ( have_posts() ) {
						// Load posts loop.
						while ( have_posts() ) {
							the_post();
							get_template_part( 'inc/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
						}
						// Previous/next page navigation.
						the_posts_navigation();
					} else {
						// If no inc/content, include the "No posts found" template.
						get_template_part( 'inc/content-none' );
					} ?>
				</div>
			</div>
		</section>
	</main>
</div>
<?php get_template_part( 'inc/main' ); ?>
<?php get_footer() ?>