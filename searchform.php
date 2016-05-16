<!-- Search -->
<form role="search" class="search-form form-inline form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="search-wrap">
    <button class="search-submit search-button animate" type="submit" title="Search">
      <i class="fa fa-search"></i>
    </button>
    <input type="search" class="form-control search-field" 
      placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" 
      value="<?php echo get_search_query(); ?>" name="s">
  </div>
</form>
<!-- End Search -->