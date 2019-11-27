
<?php get_header() ?>
<div id="content" class="row">
    <div class=" col-lg-4 col-md-4 col-sm-4 col-12">
		<?php get_sidebar('left') ?>
	</div>
    <div class=" col-lg-8 col-md-8 col-sm-8 col-12 page-content-container">
		<div class="page-content">
			<?php
				while ( have_posts() ) :
					the_post();					
                    the_title( '<h1 class="page-title">', '</h1>' );
                    ?>
                    <div class="metadata-post">
                        <i class="fa fa-user metadata-icon"></i>
                        By <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>
                        <?php edit_post_link(__('{Edit}'), ''); ?>
                    </div>

                    <div class="content-post">
                        <?php the_content(); ?>
                    </div>

				<?php endwhile; // End of the loop.
				?>
		</div>
	</div>
</div>	
<?php get_footer() ?>