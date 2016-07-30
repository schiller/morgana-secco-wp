<?php get_header(); ?>

<!-- Head Section -->
<section class="small-section bg-dark-alfa-50 parallax-3" 
  data-background="<?php bloginfo('template_directory');?>/images/full-width-images/section-bg-10.jpg">
  <div class="relative container align-left">
    <div class="row">
      <div class="col-md-8">
        <h1 class="hs-line-11 font-alt mb-20 mb-xs-0"><?php echo __('About Us') ?></h1>
        <div class="hs-line-4 font-alt">
          <!-- Extraordinary art team &&nbsp;creative minimalism lovers -->
        </div>
      </div>
      <div class="col-md-4 mt-30">
        <div class="mod-breadcrumbs font-alt align-right">
          <a href="<?php bloginfo('wpurl');?>">Home</a>&nbsp;/&nbsp;<span><?php echo __('About Us') ?></span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Head Section -->

<!-- About Section -->
<section class="page-section" id="about">
  <div class="container relative">
    <div class="section-text mb-50 mb-sm-20">
      <div class="row">

        <div class="col-md-8 col-sm-6 mb-sm-50 mb-xs-30">
          <p>
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; endif;
            ?>
          </p>
        </div>

        <!-- Team item -->
        <div class="col-md-4 col-sm-6 mb-xs-30 wow fadeInUp">
          <div class="team-item">
            <div class="team-item-image">
              <img src="<?php bloginfo('template_directory');?>/images/team/Morgana_Secco_Fotografia_sobre-320x479.jpg"
                  srcset="<?php bloginfo('template_directory');?>/images/team/Morgana_Secco_Fotografia_sobre-1937x2901.jpg 1937w,
                    <?php bloginfo('template_directory');?>/images/team/Morgana_Secco_Fotografia_sobre-1024x1534.jpg 1024w,
                    <?php bloginfo('template_directory');?>/images/team/Morgana_Secco_Fotografia_sobre-640x959.jpg 640w,
                    <?php bloginfo('template_directory');?>/images/team/Morgana_Secco_Fotografia_sobre-320x479.jpg 320w"
                  sizes="(min-width: 768px) 345px,
                    (min-width: 992px) 294px,
                    (min-width: 1200px) 360px,
                    100vw"
                  alt="Morgana Secco"/>
              <div class="team-item-detail">
                <h4 class="font-alt normal">Siga-nos nas redes sociais!</h4>
                <div class="team-social-links">
                  <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                </div>
              </div>
            </div>
            <div class="team-item-descr font-alt">
              <div class="team-item-name">
                Morgana Secco 
              </div>
              <div class="team-item-role">
                Fotógrafa
              </div>
            </div>
          </div>
        </div>
        <!-- End Team item -->
      </div>
    </div>
</section>
<!-- End About Section -->

<!-- Testimonials Section -->
<section class="page-section bg-dark bg-dark-alfa-90 fullwidth-slider" 
  data-background="<?php bloginfo('template_directory');?>/images/full-width-images/section-bg-3.jpg">
    
    <!-- Slide Item -->
    <div>
        <div class="container relative">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 align-center">
                    <!-- Section Icon -->
                    <div class="section-icon">
                        <span class="icon-quote"></span>
                    </div>
                    <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                    <blockquote class="testimonial white">
                        <p>
                            Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                            risus utaliquam dapibus. Thanks!
                        </p>
                        <footer class="testimonial-author">
                            John Doe, doodle inc.
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slide Item -->
    
    <!-- Slide Item -->
    <div>
        <div class="container relative">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 align-center">
                    <!-- Section Icon -->
                    <div class="section-icon">
                        <span class="icon-quote"></span>
                    </div>
                    <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                    <blockquote class="testimonial white">
                        <p>
                            Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                            risus utaliquam dapibus. Thanks!
                        </p>
                        <footer class="testimonial-author">
                            John Doe, doodle inc.
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slide Item -->
    
    <!-- Slide Item -->
    <div>
        <div class="container relative">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 align-center">
                    <!-- Section Icon -->
                    <div class="section-icon">
                        <span class="icon-quote"></span>
                    </div>
                    <!-- Section Title -->
                    <h3 class="small-title font-alt">What people say?</h3>
                    <blockquote class="testimonial white">
                        <p>
                            Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                            risus utaliquam dapibus. Thanks!
                        </p>
                        <footer class="testimonial-author">
                            John Doe, doodle inc.
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slide Item -->
    
</section>
<!-- End Testimonials Section -->


<!-- Logotypes Section -->
<section class="small-section pt-20 pb-20">
    <div class="container relative">
        
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                
                <div class="small-item-carousel black owl-carousel mb-0 animate-init" data-anim-type="fade-in-right-large" data-anim-delay="100">
                    
                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="<?php bloginfo('template_directory');?>/images//clients-logos/client-1.png" width="67" height="67" alt="" />
                    </div>
                    <!-- End Logo Item -->
                    
                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="<?php bloginfo('template_directory');?>/images//clients-logos/client-2.png" width="67" height="67" alt="" />
                    </div>
                    <!-- End Logo Item -->
                    
                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="<?php bloginfo('template_directory');?>/images//clients-logos/client-3.png" width="67" height="67" alt="" />
                    </div>
                    <!-- End Logo Item -->
                    
                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="<?php bloginfo('template_directory');?>/images//clients-logos/client-4.png" width="67" height="67" alt="" />
                    </div>
                    <!-- End Logo Item -->
                    
                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="<?php bloginfo('template_directory');?>/images//clients-logos/client-5.png" width="67" height="67" alt="" />
                    </div>
                    <!-- End Logo Item -->
                    
                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="<?php bloginfo('template_directory');?>/images//clients-logos/client-6.png" width="67" height="67" alt="" />
                    </div>
                    <!-- End Logo Item -->
                    
                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="<?php bloginfo('template_directory');?>/images//clients-logos/client-1.png" width="67" height="67" alt="" />
                    </div>
                    <!-- End Logo Item -->
                    
                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="<?php bloginfo('template_directory');?>/images//clients-logos/client-2.png" width="67" height="67" alt="" />
                    </div>
                    <!-- End Logo Item -->
                    
                </div>
                    
             </div>
         </div>
        
     </div>
</section>
<!-- End Logotypes -->


<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->


<!-- Features Section -->
<section class="page-section">
    <div class="container relative">
        
        <h2 class="section-title font-alt mb-70 mb-sm-40">
            Why Choose Us?
        </h2>
        
        <!-- Features Grid -->
        <div class="row multi-columns-row alt-features-grid">
            
            <!-- Features Item -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon">
                        <span class="icon-flag"></span>
                    </div>
                    <h3 class="alt-features-title font-alt">We’re Creative</h3>
                    <div class="alt-features-descr align-left">
                        Lorem ipsum dolor sit amet, c-r adipiscing elit. 
                        In maximus ligula semper metus pellentesque mattis. 
                        Maecenas  volutpat, diam enim.
                    </div>
                </div>
            </div>
            <!-- End Features Item -->
            
            <!-- Features Item -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon">
                        <span class="icon-clock"></span>
                    </div>
                    <h3 class="alt-features-title font-alt">We’re Punctual</h3>
                    <div class="alt-features-descr align-left">
                        Proin fringilla augue at maximus vestibulum. 
                        Nam pulvinar vitae neque et porttitor. Praesent sed 
                        nisi eleifend, lorem fermentum orci sit amet, iaculis libero.
                    </div>
                </div>
            </div>
            <!-- End Features Item -->
            
            <!-- Features Item -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon">
                        <span class="icon-hotairballoon"></span>
                    </div>
                    <h3 class="alt-features-title font-alt">We have magic</h3>
                    <div class="alt-features-descr align-left">
                        Curabitur iaculis accumsan augue, nec finibus mauris pretium eu. 
                        Duis placerat ex gravida nibh tristique porta. Nulla facilisi. 
                        Suspendisse ultricies eros blandit.
                    </div>
                </div>
            </div>
            <!-- End Features Item -->
            
        </div>
        <!-- End Features Grid -->
            
    </div>
</section>
<!-- End Features Section -->

<?php get_footer(); ?>