<?php
$personal_1 = get_field('personal_1');
$personal_2 = get_field('personal_2');
$personal_3 = get_field('personal_3');
$personal_4 = get_field('personal_4');
?>
    <div class="row">
      <h2>Kontakt</h2>
    </div>
    <div class="d-none d-md-flex flex-wrap personal">
       
      <?php 
      if (isset($personal_1)) {
        $img = $personal_1['sizes']['thumbnail'];
        $name = $personal_1['title'];
        $description = $personal_1['caption'];
        echo "
        <div class='col-2 d-flex flex-column'>
        <img src='$img' alt='$name'>
        <h6>$name</h6>
        <p>$description</p>
        </div>
        ";
      }

      if (isset($personal_2)) {
        $img = $personal_2['sizes']['thumbnail'];
        $name = $personal_2['title'];
        $description = $personal_2['caption'];
        echo "
        <div class='col-2 d-flex flex-column'>
        <img src='$img' alt='$name'>
        <h6>$name</h6>
        <p>$description</p>
        </div>
        ";
      }

      if (isset($personal_3)) {
        $img = $personal_3['sizes']['thumbnail'];
        $name = $personal_3['title'];
        $description = $personal_3['caption'];
        echo "
        <div class='col-2 d-flex flex-column'>
        <img src='$img' alt='$name'>
        <h6>$name</h6>
        <p>$description</p>
        </div>
        ";
      }

      if (isset($personal_4)) {
        $img = $personal_4['sizes']['thumbnail'];
        $name = $personal_4['title'];
        $description = $personal_4['caption'];
        echo "
        <div class='col-2 d-flex flex-column'>
        <img src='$img' alt='$name'>
        <h6>$name</h6>
        <p>$description</p>
        </div>
        ";
      }
      ?>

    </div>
