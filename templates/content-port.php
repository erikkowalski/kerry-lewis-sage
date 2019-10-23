<article <?php post_class(); ?>>
  <header class="post-header">

    <a href="<?php the_permalink(); ?>"><?php if( has_post_thumbnail() ): echo get_the_post_thumbnail();endif; ?> </a>
       <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


  </header>

</article>
