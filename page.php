
<?php get_header() ?>

<div id="content" class="row">
	<div class=" col-lg-3 col-md-4 col-sm-4 col-12">
		<?php get_sidebar('left') ?>
	</div>

	<div class=" col-lg-6 col-md-5 col-sm-8 col-12 page-content-container">
		<div class="page-content">
			<?php
				while ( have_posts() ) :
					the_post();
					
					the_title( '<h1 class="page-title">', '</h1>' );
					the_content();

				endwhile; // End of the loop.
				?>
		</div>
	</div>

	<div class=" col-lg-3 col-md-3 col-sm-12 col-12">
		<?php get_sidebar('right') ?>
	</div>
</div>
<?php get_footer() ?>