<?php /* Template Name: Text And Image Page */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ):
	while ( have_posts() ):
		the_post();
    the_title();
    the_content();
    the_field('text');
    ?>
    <?php 
    $image = get_field('image');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <?php the_field('alttext'); ?>
    
  <?php  
  endwhile;
else: ?>

  <p>Sorry, no posts.</p>

<?php endif ?>

<?php get_footer(); ?>