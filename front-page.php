
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
  <hr>
  <div class="row">
   <div class="col-sm-6">
     <h2>Kerry Lewis Landscape Architects, established in 2002, is a design firm dedicated to the practice of residential landscape architecture.</h2>
   </div>
    <div class="col-md-6 ">
        <p>With over 20 years of experience in residential design, I am particularly attuned to the needs of the private client. Personal service, attention to detail and hands-on involvement from beginning to end of the project are the hallmarks of my practice. Whether you have a small urban garden or a large country estate, my team and I are capable of transporting your ideas into a realized vision</p>

    </div>
  </div>
  <hr>
</section>
