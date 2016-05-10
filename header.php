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
                        <ul class="clearlist">

                            <?php wp_list_pages( '&title_li='); ?>
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Blog <i class="fa fa-angle-down"></i></a>
                                
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Classic <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="blog-classic-sidebar-left.html">Sidebar Left</a>
                                            </li>
                                            <li>
                                                <a href="blog-classic-sidebar-right.html">Sidebar Right</a>
                                            </li>
                                            <li>
                                                <a href="blog-classic-fullwidth.html">Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Columns <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="blog-columns-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="blog-columns-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="blog-columns-4col.html">4 Columns</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Masonry <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="blog-masonry-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="blog-masonry-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="blog-masonry-4col.html">4 Columns</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Single <i class="fa fa-angle-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="blog-single-sidebar-left.html">Sidebar Left</a>
                                            </li>
                                            <li>
                                                <a href="blog-single-sidebar-right.html">Sidebar Right</a>
                                            </li>
                                            <li>
                                                <a href="blog-single-fullwidth.html">Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    
                                </ul>
                                <!-- End Sub -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Divider -->
                            <li><a>&nbsp;</a></li>
                            <!-- End Divider -->
                            
                            <!-- Search -->
                            <li>
                                <a href="#" class="mn-has-sub"><i class="fa fa-search"></i> Search</a>
                                
                                <ul class="mn-sub to-left">
                                    
                                    <li>
                                        <div class="mn-wrap">
                                            <form method="post" class="form">
                                                <div class="search-wrap">
                                                    <button class="search-button animate" type="submit" title="Start Search">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                    <input type="text" class="form-control search-field" placeholder="Search...">
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    
                                </ul>
                                
                            </li>
                            <!-- End Search -->
                            
                            <!-- Languages -->
                            <li>
                                <a href="#" class="mn-has-sub">Eng <i class="fa fa-angle-down"></i></a>
                                
                                <ul class="mn-sub">
                                    
                                    <li><a href="">English</a></li>
                                    <li><a href="">France</a></li>
                                    <li><a href="">Germany</a></li>
                                    
                                </ul>
                                
                            </li>
                            <!-- End Languages -->
                            
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->