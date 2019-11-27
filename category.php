<?php get_header() ?>

<div id="content" class="row">
	<div class=" col-lg-3 col-md-4 col-sm-4 col-12">
		<?php get_sidebar('left') ?>
	</div>

	<div class=" col-lg-6 col-md-5 col-sm-8 col-12 page-content-container">
		<div class="page-content">
            <?php
                $categoryID = get_query_var('cat');
                $categoryName = get_cat_name( $categoryID);
            ?>
            <h1 class="page-title category-title"> <?php echo $categoryName ?></h1> <hr>
            <div class="card-body body-category">
            <?php        
                query_posts("cat=$categoryID&posts_per_page=100");
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="card post-thumbnail" style="width: 10rem;">
                            <!-- <?php echo the_post_thumbnail('square-thumbnail'); ?> -->
                            <!-- <?php echo the_post_thumbnail_url(); ?> -->
                            <a href="<?php the_permalink();?>">
                            <img src="<?php echo the_post_thumbnail_url('square-thumbnail'); ?>" class="thumbnail-image card-img-top" alt="...">
                            </a>
                            <div class="thumbnail-body">
                                <p class="card-text"><?php the_title(); ?></p>
                                <a href="<?php the_permalink();?>" class="btn btn-sm detail-button">chi tiết</a>
                        
                                <?php // create our link now that the post is setup ?>
                            </div>
                        </div>                        
                <?php endwhile; endif; ?>
            </div>
		</div>
	</div>

	<div class=" col-lg-3 col-md-3 col-sm-12 col-12">
		<?php get_sidebar('right') ?>
	</div>
</div>
<?php get_footer() ?>