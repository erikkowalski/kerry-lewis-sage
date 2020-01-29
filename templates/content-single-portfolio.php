<?php while (have_posts()) : the_post(); ?>

<section class="carousel">

<div id="carousel-project-page" class="carousel fade" data-ride="carousel" >
<?php  $images = get_field('project_page_gallery');
if( $images ): ?>
       <?php $dataId=0 ?>
          <ol class="carousel-indicators hidden-xs">
			  <?php foreach( $images as $image ): ?>
			 <li data-target="#carousel-home-page" id="data<?php  //echo $dataId ?>" data-slide-to="<?php // echo $dataId ?>" class=""></li>
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
            <a class="left carousel-control " href="#carousel-project-page" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-menu-left hidden-xs" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control hidden-xs" href="#carousel-project-page" role="button" data-slide="next">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

      </div>

    </section>
  <article <?php post_class('main'); ?>>
   <div class="row">
    <header class="post-header col-sm-12">
      <h1 class="entry-title"><?php the_title(); ?></h1>

    </header>


    <section class="col-sm-12 project-description">
      <p><?php the_field('project_description') ?></p>

    </section>


    <div class="col-sm-12">
       <hr>
    </div>

      <?php if( have_rows('credits_section') ):
        while ( have_rows('credits_section') ) : the_row(); ?>
     <section >
      <div class="col-sm-12">
        <p class="credits"> <span class="role"><?php the_sub_field('role'); ?>: </span><?php  the_sub_field('name'); ?>
        </p>
      </div>

  </section>
    <?php endwhile;else:endif;?>

  <div class="col-sm-12">
       <hr>
    </div>


  </div>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
