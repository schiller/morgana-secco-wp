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
  wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), false, true);
  wp_enqueue_script( 'masonry.pkgd.min', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), false, true);
  wp_enqueue_script( 'jquery.simple-text-rotator.min', get_template_directory_uri() . '/js/jquery.simple-text-rotator.min.js', array('jquery'), false, true);
  wp_enqueue_script( 'all', get_template_directory_uri() . '/js/all.js', array('jquery'), false, true);
  wp_enqueue_script( 'jquery.ajaxchimp.min', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', array('jquery'), false, true);
}
add_action( 'wp_enqueue_scripts', 'morgana_scripts' );

function morgana_enqueue_comment_reply() {
  if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') )
    wp_enqueue_script( 'comment-reply' );
}
add_action('wp_print_scripts', 'morgana_enqueue_comment_reply');

function morgana_modify_query_exclude_category( $query ) {
    if ( ! is_admin() && ! $query->is_category() && ! $query->is_search() ) {
      $cat_id = get_category_by_slug('galerias');
      $query->set( 'category__not_in', $cat_id );
    } elseif ( ! is_admin() && $query->is_category('galerias') ) {
      $cat_id = get_category_by_slug('portfolio');
      $query->set( 'category__not_in', $cat_id );
    }
}
add_action( 'pre_get_posts', 'morgana_modify_query_exclude_category' );

// Register our sidebars and widgetized areas. 
function morgana_widgets_init() {
  register_sidebar( array(
    'name'          => 'Footer 1',
    'id'            => 'footer_1',
    'before_widget' => '<div class="widget widget-body widget-text widget-menu clearlist">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="widget-title font-alt">',
    'after_title'   => '</h5>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer 2',
    'id'            => 'footer_2',
    'before_widget' => '<div class="widget widget-body widget-text widget-menu clearlist">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="widget-title font-alt">',
    'after_title'   => '</h5>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer 3',
    'id'            => 'footer_3',
    'before_widget' => '<div class="widget widget-body widget-text widget-menu clearlist">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="widget-title font-alt">',
    'after_title'   => '</h5>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer 4',
    'id'            => 'footer_4',
    'before_widget' => '<div class="widget widget-body widget-text widget-menu clearlist">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="widget-title font-alt">',
    'after_title'   => '</h5>',
  ) );
}
add_action( 'widgets_init', 'morgana_widgets_init' );

// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Switch default core markup for search form, comment form, and comments to output valid HTML5.
add_theme_support( 'html5', array(
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption',
) );

class morgana_comment_walker extends Walker_Comment {
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
                'reply_text' => '&nbsp; <i class="fa fa-comment"></i> &nbsp;' . __('Reply'),
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

class morgana_nav_menu_walker extends Walker_Nav_Menu {

  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $output .= "<ul class=\"mn-sub\">";
  }

  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $output .= "</ul>";
  }

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;

    $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

    $output .= '<li' . $id . $class_names .'>';

    $atts = array();
    $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
    $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
    $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
    $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
    $atts['class']  = $this->has_children          ? 'mn-has-sub'      : '';

    $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

    $attributes = '';
    foreach ( $atts as $attr => $value ) {
      if ( ! empty( $value ) ) {
        $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
        $attributes .= ' ' . $attr . '="' . $value . '"';
      }
    }

    $title = apply_filters( 'the_title', $item->title, $item->ID );
 
    $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

    $link_arrow = '';
    if ($this->has_children) {
      $link_arrow = $depth == 0 ? 
      ' <i class="fa fa-angle-down"></i>' : 
      ' <i class="fa fa-angle-right right"></i>';
    }
 
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . $title . $args->link_after . $link_arrow;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>";
  }
}