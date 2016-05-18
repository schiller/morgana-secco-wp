<!DOCTYPE html>
<html>
  <head>
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Morgana Secco">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory');?>/images/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory');?>/images/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory');?>/images/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/images/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory');?>/images/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory');?>/images/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory');?>/images/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/images/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/images/favicon/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/images/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/images/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php bloginfo('template_directory');?>/images/favicon/manifest.json">
    <link rel="mask-icon" href="<?php bloginfo('template_directory');?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory');?>/images/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="<?php bloginfo('template_directory');?>/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head();?>
  </head>
  <body class="appear-animate">
      
    <!-- Page Loader -->
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <!-- End Page Loader -->
    
    <!-- Page Wrap -->
    <div class="page" id="top">

      <!-- Navigation panel -->
      <nav class="main-nav <?php echo is_front_page() ? 'stick-fixed' : 'js-stick' ?>">
        <div class="full-wrapper relative clearfix">
          <!-- Logo ( * your text or image into link tag *) -->
          <div class="nav-logo-wrap local-scroll">
            <a href="<?php bloginfo('wpurl');?>" class="logo">
              <img src="<?php bloginfo('template_directory');?>/images/logo/morgana_marca_preto.png" alt="<?php echo get_bloginfo( 'name' ); ?>" />
            </a>
          </div>
          <div class="mobile-nav">
              <i class="fa fa-bars"></i>
          </div>
          
          <!-- Main Menu -->
          <div class="inner-nav desktop-nav">

            <?php 
              $args = array(
                'menu_class' => 'clearlist',
                'container' => '',
                'walker' => new morgana_nav_menu_walker()
              );

              wp_nav_menu($args);
            ?>
          </div>
          <!-- End Main Menu -->
            
        </div>
      </nav>
      <!-- End Navigation panel -->