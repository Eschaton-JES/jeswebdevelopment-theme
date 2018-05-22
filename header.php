<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119551464-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-119551464-1');
    </script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title> <?php bloginfo('name'); ?> |
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">

    <script>
    jQuery( document ).ready()(function() {


   })
    </script>

    <?php wp_head(); ?>


</head>

<!--------------------------------------------------------------------------------------------->

<body>

<!-- Navbar --------------------------------------------------------------->
<nav id="top" class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="http://jeswebdevelopment.com"><button type="button" id="brand" class="btn btn-info">JES</button></a>
  <?php
   wp_nav_menu( array(
       'menu'              => 'primary',
       'theme_location'    => 'primary',
       'depth'             => 2,
       'container'         => 'div',
       'container_class'   => 'text-light nav-link',
       'container_id'      => 'bs-example-navbar-collapse-1',
       'menu_class'        => 'nav navbar-nav text-light',
       'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
       'walker'            => new wp_bootstrap_navwalker())
   );
?>
</nav>
