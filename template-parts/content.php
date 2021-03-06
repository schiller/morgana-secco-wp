<!-- Post Item -->
<div class="col-sm-6 col-md-4 col-lg-4 mb-60 mb-xs-40 wow fadeIn" data-wow-delay="0.1s" data-wow-duration="2s">
  <div class="post-prev-img">
    <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) :
        the_post_thumbnail();
      else : ?>
        <img src="<?php bloginfo('template_directory');?>/images/blog/masonry/post-prev-1.jpg" alt="" />
      <?php endif; ?>
    </a>
  </div>
  <div class="post-prev-title font-alt">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>
  <div class="post-prev-info font-alt">
    <a href=""><?php the_author(); ?></a> | <?php the_date(); ?>
  </div>
  <div class="post-prev-text">
    <?php the_excerpt(); ?>
  </div>
  <div class="post-prev-more">
    <a href="<?php the_permalink(); ?>" class="btn btn-mod btn-gray btn-round">
      <?php echo __('Read More') ?> <i class="fa fa-angle-right"></i>
    </a>
  </div>
</div>
<!-- End Post Item -->