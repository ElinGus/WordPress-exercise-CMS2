<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    
    <?php
      wp_nav_menu( array( 
          'theme_location' => 'header-menu', 
          'container_class' => 'header-menu-class' ) ); 
    ?>

  </head>
  <body>
  