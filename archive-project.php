
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="row">
<div class="col-sm-12">
  <div class="page-header">
    <h1>Portfolio</h1>
  </div>
</div>
<?php while (have_posts()) : the_post(); ?>
 <div class="col-md-6">
  <?php get_template_part('templates/content-port', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
</div>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>

</div>
