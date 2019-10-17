<?php /* Template Name: Right Column Page */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ):
	while ( have_posts() ):
		the_post();
    the_title();
    the_content();
		
  endwhile;
else: ?>

  <p>Sorry, no posts.</p>

<?php endif ?>

<?php get_footer(); ?>
