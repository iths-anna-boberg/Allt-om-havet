<?php
$adress = get_field('adress');
$lage = get_field('lage');
$sjokort = get_field('sjokort');
$tel = get_field('tel');
$e_post = get_field('e-post');
$hamndjup = get_field('hamndjup');
$gastplatser = get_field('gastplatser');
$hamnavgift = get_field('hamnavgift');
$fortojning = get_field('fortojning');
?>

<hr>

    <p>
      <button class="btn aoh-btn-solid d-md-none" type="button" data-toggle="collapse" data-target="#info-collapse" aria-expanded="false" aria-controls="info-collapse">Info</button>
    </p>
    <div class="collapse" id="info-collapse">
      <div class="d-flex flex-wrap">
        <p class="mr-3"><strong>Adress:</strong> <?php echo $adress; ?></p>
        <p class="mr-3"><strong>Läge:</strong> <?php echo $lage; ?></p>
        <p class="mr-3"><strong>Sjökort:</strong> <?php echo $sjokort; ?></p>
        <p class="mr-3"><strong>Tel:</strong> <?php echo $tel; ?></p>
        <p class="mr-3"><strong>E-post:</strong> <?php echo $e_post; ?></p>
        <p class="mr-3"><strong>Hamndjup:</strong> <?php echo $hamndjup; ?></p>
        <p class="mr-3"><strong>Gästplatser:</strong> <?php echo $gastplatser; ?></p>
        <p class="mr-3"><strong>Förtöjning:</strong> <?php echo $fortojning; ?></p>
        <p class="mr-3"><strong>Hamnavgift:</strong> <?php echo $hamnavgift; ?></p>
      </div>
    </div>
    <div class="d-none d-md-flex flex-wrap">
    <p class="mr-3"><strong>Adress:</strong> <?php echo $adress; ?></p>
        <p class="mr-3"><strong>Läge:</strong> <?php echo $lage; ?></p>
        <p class="mr-3"><strong>Sjökort:</strong> <?php echo $sjokort; ?></p>
        <p class="mr-3"><strong>Tel:</strong> <?php echo $tel; ?></p>
        <p class="mr-3"><strong>E-post:</strong> <?php echo $e_post; ?></p>
        <p class="mr-3"><strong>Hamndjup:</strong> <?php echo $hamndjup; ?></p>
        <p class="mr-3"><strong>Gästplatser:</strong> <?php echo $gastplatser; ?></p>
        <p class="mr-3"><strong>Förtöjning:</strong> <?php echo $fortojning; ?></p>
        <p class="mr-3"><strong>Hamnavgift:</strong> <?php echo $hamnavgift; ?></p>
    </div>
