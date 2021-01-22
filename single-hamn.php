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
        <div class="harbor-title col-sm-9 d-sm-flex">
          <h1><?php the_title(); ?></h1>
          <?php get_template_part('template-parts/content', 'lan');?>
        </div>
      </div>
        <div class="col-sm-3 aoh-weather-container">
          <?php get_template_part('template-parts/content', 'weather');?>
        </div>
      </div>
    <?php get_template_part('template-parts/content', 'hamndata');?>
    <?php get_template_part('template-parts/content', 'hamn');?>
    <?php get_template_part('template-parts/content', 'personal');?>
    <?php ic_reviews() ?>
</section>
    <?php
  }
}
?>

<?php
    get_footer();
?>








