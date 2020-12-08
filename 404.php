<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header('small', false);
?>

<section class="container col">
  <article class="col">
    <h1 class="row justify-content-center">
      Not found
    </h1>
    <div class="row justify-content-center p-5">
      <?php 
        $img = wp_get_attachment_image( 9, 'medium' );
        echo $img;
      ?>
    </div>
    <div class="row justify-content-center">
      <p class="text-center w-50">Hoppsan hejsan! Vi kunde inte hitta sidan du letade efter.
        Det beror förmodligen på att den inte finns.
        Testa igen eller gå tillbaka till startsidan.
      </p>
    </div>
    <div class="row justify-content-center">
      <a href="/"><button class="aoh-btn-solid">Gå till startsida</button></a>
    </div>
  </article>
</section>

<?php
get_footer();
?>