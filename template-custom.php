<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<div class="row">
 <div class="col-sm-12">






 <?php if( have_rows('header_content') ):
      while ( have_rows('header_content') ) : the_row(); ?>


       <?php if( get_row_layout() == 'header_image_carousel' ): ?>

 <div id="carousel-header" class="carousel carousel-header  fade" data-ride="carousel" >
          <?php  $images = get_sub_field('header_image_gallery');
          if( $images ): ?>

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
 </div>



      <?php elseif( get_row_layout() == 'static_header_image' ):  ?>
        <div class="static-header">
             <img class="img-responsive img-full-width" src="<?php the_sub_field('top_header_image'); ?>" alt="">

         </div>

     <?php endif;
      endwhile;
      else :
endif; ?>


  <?php get_template_part('templates/page', 'header'); ?>

</div>
</div>
<?php endwhile; ?>

<?php if( have_rows('flexible_content_section') ):
      while ( have_rows('flexible_content_section') ) : the_row(); ?>


       <?php if( get_row_layout() == 'text_area_block' ): ?>
       <div class="row">
     <div class="col-sm-12 text-full-width">
            <?php	the_sub_field('text_area'); ?>
        </div>
    </div>

          <?php elseif( get_row_layout() == 'image_block_section' ):  ?>
          <div class="row">
        <div class="col-sm-12">
             <img class="img-responsive img-full-width" src="<?php the_sub_field('image_block'); ?>" alt="">
             <hr>
         </div>
         </div>

        <?php elseif( get_row_layout() == 'thumbnail_left_image_block_section' ):  ?>
          <div class="row">
           <div class="thumbnail-left">
            <div class="col-sm-5">
                   <img class="img-responsive img-thumbnail" src="<?php the_sub_field('image_block'); ?>" alt="">

               </div>
                <div class="col-sm-7 pull-quote">
             <?php	the_sub_field('text_area'); ?>
             </div>
           </div>
        </div>

          <?php elseif( get_row_layout() == 'two_col_headline_+_paragraph' ):  ?>
           <div class="row headline-left">
            <div class="col-sm-5">
            <h2><?php	the_sub_field('text_area_headline'); ?></h2>

               </div>
                <div class="col-sm-7">
           <p><?php	the_sub_field('text_area'); ?></p>
           </div>

        </div>
       <hr>

  <?php elseif( get_row_layout() == 'bio_layout' ):  ?>
    <div class="row bio-layout">
      <div class=" col-sm-3 col-lg-4">
        <img class="img-responsive bio-img" src="<?php	the_sub_field('bio_image'); ?>" alt="">
      </div>
      <div class=" col-sm-9 col-lg-8">
        <?php	the_sub_field('bio_text_area'); ?>
      </div>
      <div class="col-xs-12">
        <hr>
      </div>

    </div>

      <?php elseif( get_row_layout() == 'contact_layout' ):  ?>
      <div class="contact-info-section">
      <div class="row">
       <div class="col-sm-6">
         <img class="img-responsive" src="<?php the_sub_field('contact_image') ?>" alt="">
       </div>
        <div class="col-sm-6 contact-info">
          <?php the_sub_field('contact_info') ?>
        </div>
        </div>
        <div class="col-sm-12">
          <hr class="hidden-xs">
        </div>
      </div>


     <?php endif;
      endwhile;
      else :
endif; ?>



