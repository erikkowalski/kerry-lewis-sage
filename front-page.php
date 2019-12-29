
<section class="top col-sm-12">


<div id="carousel-home-page" class="carousel fade" data-ride="carousel" >
<?php  $images = get_field('home_page_gallery');
if( $images ): ?>
       <?php $dataId=0 ?>
          <ol class="carousel-indicators">
			  <?php foreach( $images as $image ): ?>
			<!--  <li data-target="#carousel-home-page" id="data<?php  //echo $dataId ?>" data-slide-to="<?php // echo $dataId ?>" class=""></li> -->
			  <?php $dataId++ ?>
			  <?php endforeach; ?>
		  </ol>

       <!-- Wrapper for slides -->
       <div class="carousel-inner" role="listbox">
       <?php $slideId = 0; ?>
        <?php foreach( $images as $image ): ?>
            <div class="item " id="slide<?php echo $slideId;?>">
                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
               </div>

            <?php $slideId++; ?>
        <?php endforeach; ?>
         </div>
<?php endif; ?>
   		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-home-page" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-home-page" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
		  </a>

    </div>


</section>

<section class="col-sm-12 hero">
 <div class="row">
   <div class="col-sm-12">
     <h2 class="tagline">Creativity . Authenticity . Sustainability</h2>
   </div>
 </div>
  <hr>
  <div class="row">
   <div class="col-sm-6 home-hero-text">
     <h2>Kerry Lewis Landscape Architecture, established in 2002, is a design firm dedicated to the practice of residential landscape architecture.</h2>
   </div>
    <div class="col-md-6 ">
        <h4>In a career spanning three decades, Kerry Lewis had amassed a wealth of knowledge in the intricacies of residential design rooted in the unique New England vernacular. Our client-focused collaborative process has led to a reputation as a responsive, practical and attentive partner in the design and construction of projects of all scales.
 </h4>

    </div>
  </div>
  <hr>
</section>
<section class="col-sm-12 projects">
<div class="row">
  <div class="col-sm-12">
    <h3>Featured Projects</h3>
  </div>
</div>
<hr>



<?php if( have_rows('portfolio_grid') ): ?>

	<?php while ( have_rows('portfolio_grid') ) : the_row(); ?>
		<!-- Grid One -->
		<?php	if( get_row_layout() == 'grid_one' ): ?>

		<div class="row grid-one">
			<div class="col col-one col-sm-4">
				<div class="grid-one-image-one">
                    <a href="<?php the_sub_field('grid_one_image_one_link'); ?>"><h2><?php the_sub_field('grid_one_image_one_tittle') ?></h2></a>
					<a href="<?php the_sub_field('grid_one_image_one_link'); ?>">
						<img class="img-responsive" src="<?php	echo the_sub_field('grid_one_image_one');  ?>" alt="">
					</a>
				</div>
				<div class="grid-one-image-two">
                    <a href="<?php the_sub_field('grid_one_image_two_link'); ?>"><h2><?php the_sub_field('grid_one_image_two_tittle') ?></h2></a>
					<a href="<?php the_sub_field('grid_one_image_two_link'); ?>">
						<img class="img-responsive" src="<?php	echo the_sub_field('grid_one_image_two');  ?>" alt="">
					</a>
				</div>
			</div>

		 <div class="col col-sm-8">
			 <div class="grid-one-image-three">
                 <a href="<?php the_sub_field('grid_one_image_three_link'); ?>"> <h2><?php the_sub_field('grid_one_image_three_tittle') ?></h2></a>
				 <a href="<?php the_sub_field('grid_one_image_three_link'); ?>">
					 <img class="img-responsive" src="<?php	echo the_sub_field('grid_one_image_three');  ?>" alt="">
				 </a>
			 </div>
			 <div class="grid-one-image-four">
                 <a href="<?php the_sub_field('grid_one_image_four_link'); ?>"> <h2><?php the_sub_field('gridone_imagefour_tittle') ?></h2></a>
				 <a href="<?php the_sub_field('grid_one_image_four_link'); ?>">
					 <img class="img-responsive" src="<?php	echo the_sub_field('grid_one_image_four');  ?>" alt="">
				 </a>
			 </div>

		 </div>
	</div><!-- /.grid-one -->

	<!-- Grid Two -->
	   <?php elseif( get_row_layout() == 'grid_two' ):  ?>
	   <div class="row grid-two">
			<div class="col col-one col-sm-6">
				<div class="grid-two-image-one">
                    <a href="<?php	the_sub_field('grid_two_image_one_link'); ?>"><h2><?php the_sub_field('grid_two_image_one_tittle') ?></h2></a>
					<a href="<?php	the_sub_field('grid_two_image_one_link'); ?>">
						<img class="img-responsive" src="<?php	the_sub_field('grid_two_image_one'); ?>" alt="">
					</a>
				</div>
			</div>
				<div class="col vertical col-xs-6 col-sm-3">
					<div class="grid-two-image-two">
                    <a href="<?php	the_sub_field('grid_two_image_two_link'); ?>"><h2><?php the_sub_field('grid_two_image_two_tittle') ?></h2></a>
					<a href="<?php	the_sub_field('grid_two_image_two_link'); ?>">
						<img class="img-responsive" src="<?php	the_sub_field('grid_two_image_two'); ?>" alt="">
					</a>
				</div>
			</div>
			<div class="col vertical col-xs-6 col-sm-3">
			<div class="grid-two-image-three">
                <a href="<?php	the_sub_field('grid_two_image_three_link'); ?>"><h2><?php the_sub_field('grid_two_image_three_tittle') ?></h2></a>
					<a href="<?php	the_sub_field('grid_two_image_three_link'); ?>">
						<img class="img-responsive" src="<?php	the_sub_field('grid_two_image_three'); ?>" alt="">
					</a>
				</div>
			</div>
		</div><!-- /.grid-two -->

<!-- Grid Three -->
	   <?php elseif( get_row_layout() == 'grid_three' ):  ?>
	   <div class="row grid-three">
			<div class="col-one col-sm-6">
				<div class="grid-three-image-one">
                    <a href="<?php	the_sub_field('grid_three_image_one_link'); ?>"><h2><?php the_sub_field('grid_three_image_one_tittle') ?></h2></a>
				<a href="<?php	the_sub_field('grid_three_image_one_link'); ?>">
					<img class="img-responsive" src="<?php	the_sub_field('grid_three_image_one'); ?>" alt="">
				</a>
				</div>
			</div>
			<div class="col-two col-sm-6">
				<div class="grid-three-image-two">
                    <a href="<?php	the_sub_field('grid_three_image_two_link'); ?>"><h2><?php the_sub_field('grid_three_image_two_tittle') ?></h2></a>
				<a href="<?php	the_sub_field('grid_three_image_two_link'); ?>">
					<img class="img-responsive" src="<?php	the_sub_field('grid_three_image_two'); ?>" alt="">
				</a>
			</div>
			</div>
		</div>



	<?php	endif;
		endwhile;
		else :
	// no layouts found
endif; ?>


 <hr>
</section>
