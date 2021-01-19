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

      <article class="col-sm-12">
      <?php
      $allPosts = new WP_Query(array('post_type'=>'hamn', 'post_status'=>'publish', 'posts_per_page'=>-1)); 
      if ( $allPosts->have_posts() ):

        // echo '<pre>',print_r($allPosts),'</pre>';
        while( $allPosts->have_posts()) : $allPosts->the_post() ;
          // the_post();
          // echo '<pre>',print_r($allPosts->the_post()),'</pre>';
          
          // echo the_post_thumbnail( get_the_ID(), 'medium') ;
          if (the_post_thumbnail_url(get_the_ID())) {

            echo "<img class='img-fluid' src=" . the_post_thumbnail_url() . " >";
        }
          echo "<h6>". the_title() . "</h6>";
                    echo '<pre>',print_r(ic_get_reviews_average( get_the_ID() )),'</pre>';

          echo ic_get_reviews_average_html();
          // echo the_post_thumbnail($allPosts->the_post());
          // echo "<h6>". the_title($allPosts->the_post()) . "</h6>";
          // echo ic_get_reviews_average_html($allPosts->the_post());
      
        endwhile;
        endif;
        wp_reset_postdata();

      
      ?>
      </article>
      </div>
  </section>

  <?php
    get_footer();
  ?>