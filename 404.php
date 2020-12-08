<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header('small', false);
?>

<section class="container col">
  <h1 class="row justify-content-center border-bottom border-dark">
    Not found
  </h1>
  <article class="col aoh-404-content">
    <div class="aoh-404-inner">
      <div class="justify-content-center p-5">
        <?php 
          $img = wp_get_attachment_image( 9, 'medium' );
          echo $img;
        ?>
      </div>
      <div>
        <p class="text-center">Hoppsan hejsan! Vi kunde inte hitta sidan du letade efter.
          Det beror förmodligen på att den inte finns.
          Testa igen eller gå tillbaka till startsidan.
        </p>
      </div>
      <div>
        <a href="/"><button class="aoh-btn-solid m-4">Gå till startsida</button></a>
      </div>
    </div>
  </article>
</section>

<?php
get_footer();   
?>