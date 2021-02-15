<div class="col-sm-6 col-lg-4 mb-3">
	<div class="card">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img loading="lazy" src="<?php echo get_the_post_thumbnail_url( null, 'post-thumbnail' );?>" class="card-img-top img-zoom" alt="<?php the_title_attribute(); ?>"></a>
		<div class="card-body">
			<h4 class="card-title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
				</a>
			</h4>
			<!--button type="button" class="btn btn-sm btn-outline-secondary">davomi o'qish</button-->
			<small class="text-muted"><?php the_date(); ?></small>
		</div>
	</div>
</div>