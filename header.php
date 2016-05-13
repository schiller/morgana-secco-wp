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
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.png">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory');?>/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/images/apple-touch-icon-114x114.png">

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
      <nav class="main-nav <?php echo is_front_page() ? 'transparent stick-fixed' : 'js-stick' ?>">
        <div class="full-wrapper relative clearfix">
          <!-- Logo ( * your text or image into link tag *) -->
          <div class="nav-logo-wrap local-scroll">
            <a href="<?php bloginfo('wpurl');?>" class="logo">
              <img src="<?php bloginfo('template_directory');?>/images/logo-dark.png" alt="<?php echo get_bloginfo( 'name' ); ?>" />
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