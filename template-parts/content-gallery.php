<!-- Work Item (External Page) -->
<li class="work-item">
  <a href="<?php the_permalink(); ?>" class="work-ext-link">
    <div class="work-img">
      <?php if ( has_post_thumbnail() ) :
        the_post_thumbnail('post-thumbnail', array( 'class' => 'work-img' ));
      else : ?>
        <img src="<?php bloginfo('template_directory');?>/images/blog/masonry/post-prev-1.jpg"
          class="work-img" alt="<?php the_title(); ?>" />
      <?php endif; ?>
    </div>
    <div class="work-intro">
      <h3 class="work-title"><?php the_title(); ?></h3>
      <div class="work-descr">
        <?php the_author(); ?>
      </div>
    </div>
  </a>
</li>
<!-- End Work Item -->