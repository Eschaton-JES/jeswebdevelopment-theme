<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119551464-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-119551464-1');
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> <?php bloginfo('name'); ?> |
            <?php is_front_page() ? bloginfo('description') : the_title(); ?>
    </title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <?php wp_head(); ?>


</head>

<!--------------------------------------------------------------------------------------------->

<body <?php if(!is_front_page()) echo 'class="body-bg"';?>>

<!-- Navbar --------------------------------------------------------------->
<nav id="top" class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="navbar-brand" ><button id="brand" class=" btn btn-info">JES</button></div>
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
