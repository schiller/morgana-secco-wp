<?php get_header(); ?>
            
<section
  class="home-section bg-dark-alfa-50 parallax-2"
  data-background="<?php bloginfo('template_directory');?>/images/full-width-images/section-bg-12.jpg">
  <div class="js-height-full">

    <!-- Hero Content -->
    <div class="home-content container">
      <div class="home-text">
        <div class="hs-cont">

          <!-- Headings -->
          <div class="hs-wrap">
            <div class="hs-line-13 font-alt mb-10"> 404 </div>
            <div class="hs-line-4 font-alt mb-40">
              <?php echo _x('The page you were looking for could not be found.') ?>
            </div>
            <div class="local-scroll">
              <a href="<?php bloginfo('wpurl');?>" class="btn btn-mod btn-w btn-round btn-small">
                <i class="fa fa-angle-left"></i> <?php echo _x('Back To Home Page') ?>
              </a>
            </div>
          </div>
          <!-- End Headings -->

        </div>
      </div>
    </div>
    <!-- End Hero Content -->

  </div>
</section>
<!-- End Home Section -->
            
<?php get_footer(); ?>