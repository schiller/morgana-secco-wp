 <?php get_header(); ?>

            <!-- Head Section -->
            <section class="small-section bg-dark" data-background="<?php bloginfo('template_directory');?>/images/full-width-images/section-bg-2.jpg">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Blog</h1>
                            <div class="hs-line-4 font-alt">
                                We share our best ideas in our blog
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="<?php bloginfo('wpurl');?>">Home</a>&nbsp;/&nbsp;<a href="#">Blog</a>&nbsp;/&nbsp;<span>Masonry</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- Search Section -->
            <section class="small-section">
                <div class="container relative">
                    
                    <!-- Search -->
                    
                    <form class="form-inline form" role="form">
                        <div class="search-wrap">
                            <button class="search-button animate" type="submit" title="Start Search">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="text" class="form-control search-field" placeholder="Search...">
                        </div>
                    </form>
                    
                    <!-- End Search -->
                    
                </div>
            </section>
            <!-- End Search Section -->
            
            
            <!-- Divider -->
            <hr class="mt-0 mb-0"/>
            <!-- End Divider -->
            
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">

                    <?php if ( have_posts() ) : ?>
                        <div class="row masonry">
                            <?php 
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content', get_post_format() );
                                endwhile;
                            ?>
                        </div>

                        <div class="pagination">
                            <?php 
                                $args = array(
                                    'prev_text'          => __('<i class="fa fa-angle-left"></i>'),
                                    'next_text'          => __('<i class="fa fa-angle-right"></i>')
                                );
                                echo paginate_links( $args );
                            ?>
                        </div>

                    <?php else : ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>

                </div>
            </section>
            <!-- End Section -->

 <?php get_footer(); ?>