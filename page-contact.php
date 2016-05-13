<?php get_header(); ?>

<!-- Head Section -->
<section class="page-section bg-dark-alfa-70 parallax-3" 
  data-background="<?php bloginfo('template_directory');?>/images/full-width-images/section-bg-25.jpg">
  <div class="relative container align-left">
    <div class="row">
      <div class="col-md-8">
        <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Contact</h1>
        <div class="hs-line-4 font-alt">
          We’re always open to talk to good people
        </div>
      </div>
      <div class="col-md-4 mt-30">
        <div class="mod-breadcrumbs font-alt align-right">
          <a href="<?php bloginfo('wpurl');?>">Home</a>&nbsp;/&nbsp;<span>Contact</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Head Section -->

<!-- Contact Section -->
<section class="page-section" id="contact">
  <div class="container relative">

    <h2 class="section-title font-alt mb-70 mb-sm-40">
      Have questions?
    </h2>

    <div class="row mb-60 mb-xs-40">
      <div class="col-md-8 col-md-offset-2">
        <div class="row">

          <!-- Phone -->
          <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
            <div class="contact-item">
              <div class="ci-icon">
                <i class="fa fa-phone"></i>
              </div>
              <div class="ci-title font-alt">
                Call Us
              </div>
              <div class="ci-text">
                +61 3 8376 6284
              </div>
            </div>
          </div>
          <!-- End Phone -->

          <!-- Address -->
          <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
            <div class="contact-item">
              <div class="ci-icon">
                <i class="fa fa-map-marker"></i>
              </div>
              <div class="ci-title font-alt">
                Address
              </div>
              <div class="ci-text">
                245 Quigley Blvd, Ste K
              </div>
            </div>
          </div>
          <!-- End Address -->

          <!-- Email -->
          <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
            <div class="contact-item">
              <div class="ci-icon">
                <i class="fa fa-envelope"></i>
              </div>
              <div class="ci-title font-alt">
                Email
              </div>
              <div class="ci-text">
                <a href="mailto:support@bestlooker.pro">support@bestlooker.pro</a>
              </div>
            </div>
          </div>
          <!-- End Email -->
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php
          if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
          endwhile; endif;
        ?>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

<?php get_footer(); ?>