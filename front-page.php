
<?php get_header() ?>

<div id="content" class="row">
	<div class=" col-lg-3 col-md-4 col-sm-4 col-12">
		<?php get_sidebar('left') ?>
	</div>

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

	<div class=" col-lg-3 col-md-3 col-sm-12 col-12">
		<?php get_sidebar('right') ?>
	</div>
</div>
<?php get_footer() ?>