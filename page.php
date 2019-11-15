
<?php get_header() ?>
	<div class="col-sm-3">
		<?php get_sidebar('left') ?>
	</div>

	<div class="col-sm-6">
		<?php
			while ( have_posts() ) :
				the_post();

				the_content();

			endwhile; // End of the loop.
			?>
	</div>

	<div class="col-sm-3">
		<?php get_sidebar('right') ?>
	</div>
<?php get_footer() ?>