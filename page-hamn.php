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

      <?php 
      
        dynamic_sidebar('start-page-event-box');
      
      ?>

      </article>
    </div>
  </section>

</body>