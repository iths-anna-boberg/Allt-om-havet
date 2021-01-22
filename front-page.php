<?php

  get_header();

?>

  <section class='container'>
    <div class='row'>
      <article class='col-sm-8 mt-5'>

      <?php 
        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content();
          }
        }
      ?>

      

      </article>
      <article class="col-sm-4 mt-5">
        <div class="p-4 aoh-event-box aoh-box-lightblue">
          <?php dynamic_sidebar('start-page-event-box');?>
        </div>
      </article>
    </div>

    <div class="mt-5">
      <article class="col-sm-12">
        <h3 class="mb-4">Populäraste hamnarna 2020</h3>
      </article>

      <?php get_template_part('template-parts/content', 'best_rated');?>

      </div>
  </section>

  <?php
    get_footer();
  ?>