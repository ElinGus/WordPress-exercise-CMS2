<?php /* Template Name: Contact Page */ ?>

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

<?php echo do_shortcode('[google_map_easy id="1"]')?>

<?php get_footer(); ?>