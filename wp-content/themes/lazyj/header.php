<!-- <!doctype html> -->
<html lang="en">
<head>
  

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?><?php wp_title(); ?>" />
    <meta name="author" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="" />
    <meta name="copyright" content="2014 (c) Company Name" />
    
    <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:image" content="" />
    
    <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    

    <!-- Mobile Jazz -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSS: implied media="all" -->

    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/style.css" type="text/css" media="screen" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>

    <script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/instafeed.min.js"></script>

    <!-- Place somewhere in the <head> of your document -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- type kit -->

  
    <!-- bootstrap css -->

    <link href="<?php bloginfo('template_directory' ); ?>/css/bootstrap.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory' ); ?>/js/bootstrap.js" type='text/javascript'></script>
    <!-- track me -->

    <!-- slickslider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.5/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.5/slick-theme.css"/>   

    
<body <?php body_class(); ?>>
  
  <header>
  <!-- leader board -->
    <div class="leader-board background">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <a href="<?php bloginfo( 'url' ); ?>">
              <img class="leader-board logo" src="<?php bloginfo('template_directory' ); ?>/img/lazy_j_logo.png" alt="">
            </a>
          </div>
          <div class="col-md-offset-6 col-md-3">
            <div class="leader-board cross-hair box">
              <img src="<?php bloginfo('template_directory' ); ?>/img/cross_hairs.png" alt="">
            </div>
            <div class="leader-board hunt-promo box center">
              <div class="hunt-promo center">
                Book Your Hunt
              </div>
              <div class="hunt-promo number center">
                XXX-XXX-XXXX
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- navigation -->
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php 
          wp_nav_menu( array(
                  'menu'              => 'menu',
                  'theme_location'    => 'main-nav',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'navbar-collapse collapse',
                  'container_id'      => 'navbar',
                  'menu_class'        => 'nav navbar-nav navbar-left',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );

         ?>
      </div><!-- /.container -->
    </nav>
  </header>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php 
          wp_nav_menu( array(
                  'menu'              => 'menu',
                  'theme_location'    => 'main-nav',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'navbar-collapse collapse',
                  'container_id'      => 'navbar',
                  'menu_class'        => 'nav navbar-nav navbar-left',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );

         ?>
      </div><!-- /.container -->
    </nav>
  </header>