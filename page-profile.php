<?php while (have_posts()) : the_post(); ?>
 <div class="col-sm-12">
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
</div>
<?php endwhile; ?>

<?php if( have_rows('profile_section') ):
      while ( have_rows('profile_section') ) : the_row(); ?>


       <?php if( get_row_layout() == 'text_area_block' ): ?>
     <div class="col-sm-12">
           <p> <?php	the_sub_field('text_area'); ?></p>
        </div>

          <?php elseif( get_row_layout() == 'image_block_section' ):  ?>
        <div class="col-sm-12">
             <img class="img-responsive" src="<?php the_sub_field('image_block'); ?>" alt="">
             <hr>
         </div>

          <?php endif;
      endwhile;
      else :
endif; ?>


f
