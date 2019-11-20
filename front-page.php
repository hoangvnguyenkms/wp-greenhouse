
<?php get_header() ?>

<div id="content" class="row">
        <script>alert(123)</script>
	
        <?php
			$cats = get_categories(); 
				foreach ($cats as $cat) {
					$cat_id= $cat->term_id; ?>
                    <div class="card text-center mb-4">
                        <div class="card-header">
                            <?php echo $cat->name; ?>
                        </div>
                        <div class="card-body body-category">
                    <?php        
					query_posts("cat=$cat_id&posts_per_page=100");
					if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="card" style="width: 12rem;">
                                <!-- <?php echo the_post_thumbnail('square-thumbnail'); ?> -->
                                <?php echo the_post_thumbnail_url(); ?>
                                <!-- <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" class="card-img-top" alt="..."> -->
                                <img src="<?php echo the_post_thumbnail_url('square-thumbnail'); ?>" class="thumbnail-image card-img-top" alt="...">

                                <div class="card-body">
                                    <p class="card-text"><?php the_title(); ?></p>
                                    <a href="<?php the_permalink();?>" class="btn detail-button">Chi tiết</a>
                            
                                    <?php // create our link now that the post is setup ?>
						        </div>
                            </div>                        
					<?php endwhile; endif; ?>
                        </div>
                    </div>
			<?php } ?>

	<div class=" col-lg-6 col-md-5 col-sm-8 col-12">
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

        <div class="card text-center mb-4">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn detail-button">Go somewhere</a>
            </div>            
        </div>
	</div>
</div>
