<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header('small', false);
?>

<section class="container col">
  <article class="col aoh-404-content">
    <h1 class="row justify-content-center border-bottom border-dark">
      Not found
    </h1>
    <div class="container d-flex flex-column justify-content-center h-100">
      <div class="row justify-content-center p-5">
        <?php 
          $img = wp_get_attachment_image( 9, 'medium' );
          echo $img;
        ?>
      </div>
      <div class="row m-auto container-sm">
        <p class="text-center">Hoppsan hejsan! Vi kunde inte hitta sidan du letade efter.
          Det beror förmodligen på att den inte finns.
          Testa igen eller gå tillbaka till startsidan.
        </p>
      </div>
      <div class="row justify-content-center">
        <a href="/"><button class="aoh-btn-solid m-4">Gå till startsida</button></a>
      </div>
    </div>
  </article>
</section>

<?php
get_footer();   
?>