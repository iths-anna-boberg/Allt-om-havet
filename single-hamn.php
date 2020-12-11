<?php

get_header('small');

?>
<?php 
if(have_posts()){
  while(have_posts()){
    the_post();
    // the_content();
    ?>

<section class='container aoh-main-container'>
      <div class='row aoh-harbor-heading'>
        <div class="col-sm-9 d-sm-flex align-items-end">
          <h1><?php the_title(); ?></h1>
          <?php get_template_part('template-parts/content', 'lan');?>
        </div>
      </div>
        <div class="col-sm-3">
          <?php get_template_part('template-parts/content', 'weather');?>
        </div>
      </div>
    <?php get_template_part('template-parts/content', 'hamndata');?>
    <?php get_template_part('template-parts/content', 'hamn');?>
</section>
    <?php
  }
}
?>

<?php
    get_footer();
?>







