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
  </section>

  <?php
    get_footer();
  ?>