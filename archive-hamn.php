<?php

get_header('small');

?>

<div class="container">
  <h1>Hamnar</h1>
  <hr>

<?php 
  if(have_posts()) :while(have_posts()) : the_post();
?>
  <div class="hamn-row"></div>
  <?php
      the_title();
      $lan = get_field('lan');
      echo $lan;
    endwhile; 
    endif;
  ?>
  </div>

</div>

<?php
?>

<?php
    get_footer();
?>








