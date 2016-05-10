<?php 
  if ( post_password_required() ) {
    return;
  }
?>

<?php if ( have_comments() ) : ?>
  <!-- Comments -->
  <div class="mb-80 mb-xs-40">

    <h4 class="blog-page-title font-alt">
      <?php echo _x('Comments', 'comments title') ?>
      <small class="number">(<?php echo get_comments_number() ?>)</small>
    </h4>

    <?php
      $args = array(
        'walker' => new comment_walker(),
        'avatar_size' => 50,
        'short_ping' => true
      );

      wp_list_comments($args);
    ?>
  </div>
  <!-- End Comments -->
<?php endif; // Check for have_comments(). ?>

<?php if (! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
  <p class="blog-page-title font-alt">
    <?php _e( 'Comments are closed.' ); ?>
  </p>
<?php endif; ?>

<?php
  $fields = array(

    'author' =>
      '<div class="row mb-20 mb-md-10"><div class="col-md-6 mb-md-10">
      <input type="text" name="author" id="author" class="input-md form-control" 
      placeholder="' . __( 'Name', 'domainreference' ) . ( $req ? ' *' : '' ) . '" 
      value="' . esc_attr( $commenter['comment_author'] ) . '" 
      maxlength="100"' . $aria_req . ( $req ? ' required' : '' ) . '></div>',

    'email' =>
      '<div class="col-md-6">
      <input type="email" name="email" id="email" class="input-md form-control" 
      value="' . esc_attr(  $commenter['comment_author_email'] ) . '" 
      placeholder="' . __( 'Email', 'domainreference' ) . ( $req ? ' *' : '' ) . '" 
      maxlength="100" ' . $aria_req . ( $req ? ' required' : '' ) . '></div></div>',

    'url' => ''
  );

  $args = array(
    'class_form' => 'form',
    'class_submit' => 'btn btn-mod btn-medium',
    'title_reply_before' => '<h4 class="blog-page-title font-alt">',
    'title_reply_after' => '</h4>',

    'comment_field' => '<div class="mb-30 mb-md-10">
      <textarea name="comment" id="comment" class="input-md form-control" rows="6" 
      placeholder="' . _x( 'Comment', 'noun' ) .' *" 
      maxlength="400" aria-required="true" required></textarea></div>',

    'comment_notes_before' => '<p class="font-alt"><small>' .
      __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
      '</small></p>',

    'fields' => apply_filters( 'comment_form_default_fields', $fields )    
  );
?>

<!-- Add Comment -->
<div class="mb-80 mb-xs-40">
<?php
  comment_form($args);
?>
</div>
<!-- End Add Comment -->