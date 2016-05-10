<?php get_header(); ?>

<!-- Head Section -->
<section class="small-section bg-gray-lighter">
    <div class="relative container align-left">
        
        <div class="row">
            
            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Blog single</h1>
                <div class="hs-line-4 font-alt black">
                    We share our best ideas in our blog
                </div>
            </div>
            
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="<?php bloginfo('wpurl');?>">Home</a>&nbsp;/&nbsp;<a href="#">Blog</a>&nbsp;/&nbsp;<span>Single</span>
                </div>
                
            </div>
        </div>
        
    </div>
</section>
<!-- End Head Section -->


<!-- Section -->
<section class="page-section">
    <div class="container relative">
        
        <div class="row">
            
            <!-- Content -->
            <div class="col-sm-10 col-sm-offset-1">
                
                <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content-single', get_post_format() );

                        if ( comments_open() || get_comments_number() ) :
                          comments_template();
                        endif;

                    endwhile; endif;
                ?>
				
                <!-- Prev/Next Post -->
                <div class="clearfix mt-40">
                    <a href="#" class="blog-item-more left"><i class="fa fa-angle-left"></i>&nbsp;Prev post</a>
                    <a href="#" class="blog-item-more right">Next post&nbsp;<i class="fa fa-angle-right"></i></a>
                </div>
                <!-- End Prev/Next Post -->
                
            </div>
            <!-- End Content -->
            
        </div>
        
    </div>
</section>
<!-- End Section -->

<?php get_footer(); ?>