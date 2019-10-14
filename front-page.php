
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
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-home-page" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
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
   <div class="col-sm-6">
     <h2>Kerry Lewis Landscape Architecture, established in 2002, is a design firm dedicated to the practice of residential landscape architecture.</h2>
   </div>
    <div class="col-md-6 ">
        <p>In a career spanning three decades, Kerry Lewis had amassed a wealth of knowledge in the intricacies of residential design rooted in the unique New England vernacular. Our client-focused collaborative process has led to a reputation as a responsive, practical and attentive partner in the design and construction of projects of all scales.
 </p>

    </div>
  </div>
  <hr>
</section>
<section class="col-sm-12 projects">
<div class="row">
  <div class="col-sm-12">
    <h3>Projects</h3>
  </div>
</div>
<hr>
 <div class="row">
   <div class="col-sm-6">
       <img class=" img-responsive" src="<?= get_template_directory_uri(); ?>/dist/images/IMG_5582.jpg" alt="project">

   </div>
   <div class="col-sm-6">
       <img class=" img-responsive" src="<?= get_template_directory_uri(); ?>/dist/images/IMG_5838.jpg" alt="project">

   </div>
 </div>
 <hr>
  <div class="row">
   <div class="col-sm-6">
       <img class=" img-responsive" src="<?= get_template_directory_uri(); ?>/dist/images/IMG_5862.jpg" alt="project">

   </div>
   <div class="col-sm-6">
       <img class=" img-responsive" src="<?= get_template_directory_uri(); ?>/dist/images/IMG_5550.jpg" alt="project">

   </div>
 </div>
 <hr>
</section>
