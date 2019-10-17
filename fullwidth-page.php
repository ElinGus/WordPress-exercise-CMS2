<?php
/*
*
Template Name: Full-Width
*/

get_header(); ?>

<?php if ( have_posts() ): 
	while ( have_posts() ): 
		the_post();
    the_title();
    the_content();
    the_post_thumbnail();
  endwhile;
else: ?>  

  <p>Sorry, no posts.</p>

<?php endif ?>
    
<?php get_footer(); ?> 