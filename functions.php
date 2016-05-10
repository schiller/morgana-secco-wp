<?php
  // Add scripts and stylesheets
  function morgana_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'style-responsive', get_template_directory_uri() . '/css/style-responsive.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css');
    wp_enqueue_style( 'vertical-rhythm', get_template_directory_uri() . '/css/vertical-rhythm.min.css');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');

    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), '1.11.2', true );
    wp_enqueue_script( 'jquery.easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), false, true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'SmoothScroll', get_template_directory_uri() . '/js/SmoothScroll.js', array('jquery'), false, true);
    wp_enqueue_script( 'jquery.scrollTo.min', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'jquery.localScroll.min', get_template_directory_uri() . '/js/jquery.localScroll.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'jquery.viewport.mini', get_template_directory_uri() . '/js/jquery.viewport.mini.js', array('jquery'), false, true);
    wp_enqueue_script( 'jquery.countTo', get_template_directory_uri() . '/js/jquery.countTo.js', array('jquery'), false, true);
    wp_enqueue_script( 'jquery.appear', get_template_directory_uri() . '/js/jquery.appear.js', array('jquery'), false, true);
    wp_enqueue_script( 'jquery.sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery'), false, true);
    wp_enqueue_script( 'jquery.parallax-1.1.3', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array('jquery'), false, true);
    wp_enqueue_script( 'jquery.fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), false, true);
    wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'isotope.pkgd.min', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'imagesloaded.pkgd.min', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), false, true);
    wp_enqueue_script('maps.google', 'http://maps.google.com/maps/api/js?sensor=false&amp;language=en', array(), false, true);
    wp_enqueue_script( 'gmap3.min', get_template_directory_uri() . '/js/gmap3.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'masonry.pkgd.min', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'jquery.simple-text-rotator.min', get_template_directory_uri() . '/js/jquery.simple-text-rotator.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'all', get_template_directory_uri() . '/js/all.js', array('jquery'), false, true);
    wp_enqueue_script( 'contact-form', get_template_directory_uri() . '/js/contact-form.js', array('jquery'), false, true);
    wp_enqueue_script( 'jquery.ajaxchimp.min', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', array('jquery'), false, true);
  }

  add_action( 'wp_enqueue_scripts', 'morgana_scripts' );

  // WordPress Titles
  add_theme_support( 'title-tag' );

  // Support Featured Images
  add_theme_support( 'post-thumbnails' );

  class comment_walker extends Walker_Comment {
    var $tree_type = 'comment';
    var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );
 
    // constructor – wrapper for the comments list
    function __construct() { ?>
      <div class="media-list text comment-list clearlist">      
    <?php }

    // start_lvl – wrapper for child comments list
    function start_lvl( &$output, $depth = 0, $args = array() ) {
      $GLOBALS['comment_depth'] = $depth + 2; ?>
    <?php }
  
    // end_lvl – closing wrapper for child comments list
    function end_lvl( &$output, $depth = 0, $args = array() ) {
      $GLOBALS['comment_depth'] = $depth + 2; ?>
    <?php }

    // start_el – HTML for comment template
    function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
      $depth++;
      $GLOBALS['comment_depth'] = $depth;
      $GLOBALS['comment'] = $comment;
      $parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' );
      ?>

      <div 
        <?php comment_class($parent_class . ' media comment-item') ?> 
        id="comment-<?php comment_ID() ?>" itemprop="comment" itemscope itemtype="http://schema.org/Comment">

          <?php echo ( 
            $args['avatar_size'] != 0
            ? get_avatar(
              $comment, 
              $args['avatar_size'], 
              'mm',
              __('Author'),
              array('class' => 'pull-left media-object comment-avatar')
            ) 
            : '' );
          ?>

          <div class="media-body">

            <div class="comment-item-data">
              <div class="comment-author">
                <a class="comment-author-link" href="<?php comment_author_url(); ?>" itemprop="author">
                  <?php comment_author(); ?>
                </a>
              </div>

              <time class="comment-meta-item" 
              datetime="<?php comment_date('Y-m-d') ?>T<?php comment_time('H:iP') ?>" 
              itemprop="datePublished">
                <?php comment_date() ?>, 
                <a href="#comment-<?php comment_ID() ?>" itemprop="url"><?php comment_time() ?></a>
              </time>

              <span class="separator">&mdash;</span>

              <?php edit_comment_link(); ?>

              <?php 
                $reply_args = array(
                  'add_below' => 'comment',
                  'reply_text' => '<i class="fa fa-comment"></i>&nbsp;' . __('Reply'),
                  'depth' => $depth,
                  'max_depth' => $args['max_depth']
                );

                comment_reply_link(array_merge( $args, $reply_args ))
              ?>

              <?php if ($comment->comment_approved == '0') : ?>
                <p class="comment-meta-item">
                  <?php echo __('Your comment is awaiting moderation.') ?>
                </p>
              <?php endif; ?>
            </div>

            <p class="comment-content post-content" itemprop="text">
              <?php comment_text() ?>
            </p>
    <?php }

    // end_el – closing HTML for comment template
    function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

      </div>
    <?php }

    // destructor – closing wrapper for the comments list
    function __destruct() { ?>

      </div>
    <?php }
  }