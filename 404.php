<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header('small', false);
?>

<section class="container">
  <h1 class="row justify-content-center border-bottom border-dark">
    Error 404
  </h1>
  <article class="col aoh-404-content">
    <div class="aoh-404-inner">
      <div class="justify-content-center p-5">
          <img alt="Sinking 404-boat" src="<?php echo get_template_directory_uri(); ?>/assets/404-image.png" >
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