
<?php

get_header('small');

?>

<div class="container hamn-page-wrapper">
  <div class="heading-wrapper mt-4 d-flex flex-row align-items-center justify-content-between">
    <h1>Hamnar</h1>
    <form class="dock-search-form" role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
        <input class="search-field" type="text" name="s" placeholder="Sök Hamnar"/>
        <input type="hidden" name="post_type" value="hamn" /> <!-- // hidden 'docks' value -->
        <input class="search-btn" type="submit" alt="Search" value="" />
    </form>
  </div>
  <hr>
  <div class="hamn-lista">
    <?php 
      if(have_posts()) : while(have_posts()) : the_post();
      $url = get_post_permalink();

    ?>
    <div class="hamn-row d-flex flex-row justify-content-between p-1">
      <a class="d-inline-block font-weight-medium" href="<?php echo $url ?>"><?php the_title();?></a>
      <?php $lan = get_field('lan'); ?>
      <p class="d-inline m-0"><?php echo $lan;?></p>
    </div>
    <?php 
    endwhile; 
    endif;
    ?>
  </div>
</div>
<?php
    get_footer();
?>








