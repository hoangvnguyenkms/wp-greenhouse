
<?php get_header() ?>

<div id="content" class="row">	
    <div class=" col-lg-6 col-md-5 col-sm-8 col-12">
        <?php
			$cats = get_categories(); 
				foreach ($cats as $cat) {
                    $cat_id= $cat->term_id; ?>
                    <div class="col-12">
                    <div class="card text-center mb-4">
                        <div class="card-header header-category">
                            <?php echo $cat->name; ?>
                        </div>
                        <div class="card-body body-category">
                    <?php        
					query_posts("cat=$cat_id&posts_per_page=100");
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
            <?php } ?>
    </div>

	<!-- <div class=" col-lg-6 col-md-5 col-sm-8 col-12">
        <div class="card text-center mb-4">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body body-category">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">title</p>
                        <a href="#" class="btn detail-button">Go somewhere</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">title</p>
                        <a href="#" class="btn detail-button">Go somewhere</a>
                    </div>
                </div>
                
            </div>            
        </div>
	</div> -->
</div>
