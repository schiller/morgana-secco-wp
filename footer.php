      <!-- Divider -->
      <hr class="mt-0 mb-0"/>
      <!-- End Divider -->      
      
      <!-- Widgets Section -->
      <section class="page-section">
        <div class="container relative">
          <div class="row multi-columns-row">

            <div class="col-sm-6 col-md-3 col-lg-3">
              <?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
                <?php dynamic_sidebar( 'footer_1' ); ?>
              <?php endif; ?>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
              <?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
                <?php dynamic_sidebar( 'footer_2' ); ?>
              <?php endif; ?>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
              <?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
                <?php dynamic_sidebar( 'footer_3' ); ?>
              <?php endif; ?>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
              <?php if ( is_active_sidebar( 'footer_4' ) ) : ?>
                <?php dynamic_sidebar( 'footer_4' ); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
      <!-- End Widgets Section -->

      <!-- Footer -->
      <footer class="page-section bg-gray-lighter footer pb-60">
        <div class="container">

          <!-- Footer Logo -->
          <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
            <a href="#top">
              <img src="<?php bloginfo('template_directory');?>/images/logo/morgana_coracao_preto.png" width="78" height="36" alt="" />
            </a>
          </div>
          <!-- End Footer Logo -->

          <!-- Social Links -->
          <div class="footer-social-links mb-110 mb-xs-60">
            <a href="https://www.facebook.com/morganaseccofotografia" title="Facebook" target="_blank">
              <i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/morganasecco" title="Twitter" target="_blank">
              <i class="fa fa-twitter"></i></a>
            <a href="https://instagram.com/morganasecco" title="Instagram" target="_blank">
              <i class="fa fa-instagram"></i></a>
            <a href="https://www.pinterest.com/morganasecco/" title="Pinterest" target="_blank">
              <i class="fa fa-pinterest"></i></a>
          </div>
          <!-- End Social Links -->  

          <!-- Footer Text -->
          <div class="footer-text">
            <!-- Copyright -->
            <div class="footer-copy font-alt">
              <a href="http://www.schillersoftware.com" target="_blank">&copy; Schiller Software 2016</a>
            </div>
            <!-- End Copyright -->

            <div class="footer-made">
              Made with love for great people.
            </div>
          </div>
          <!-- End Footer Text --> 
        </div>

        <!-- Top Link -->
        <div class="local-scroll">
          <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
        </div>
        <!-- End Top Link -->
      </footer>
      <!-- End Footer -->
    </div>
    <!-- End Page Wrap -->

    <!-- JS -->
    <?php wp_footer(); ?>
    <!--[if lt IE 10]><script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/placeholder.js"></script><![endif]-->
  </body>
</html>