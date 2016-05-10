<?php get_header(); ?>

<!-- Head Section -->
<section class="small-section bg-dark" data-background="<?php bloginfo('template_directory');?>/images/full-width-images/section-bg-2.jpg">
    <div class="relative container align-left">
        
        <div class="row">
            
            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0"><?php the_title(); ?></h1>
            </div>
            
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="<?php bloginfo('wpurl');?>">Home</a>&nbsp;/&nbsp;<span><?php the_title(); ?></span>
                </div>
                
            </div>
        </div>
        
    </div>
</section>
<!-- End Head Section -->


<!-- Content Section -->
<section class="page-section" id="content">
    <div class="container relative">
        
        <div class="section-text mb-50 mb-sm-20">
            <div class="row">
            
                <div class="col-sm-12">
                    <?php the_content(); ?>
                </div>
                
            </div>
        </div>
        
    </div>
</section>
<!-- End Content Section -->

<?php get_footer(); ?>