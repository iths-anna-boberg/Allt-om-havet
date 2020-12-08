<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<?php /* Template Name: testPage1 */ ?>
<?php get_header(); ?>

 <div class="container about_wrapper">
     <h1>Om oss</h1>
        <hr> <!-- WARNING: PLACEHOLDER! -->
  <div class="row">
    <div class="col-6">
        <p> Allt Om Havet innehåller uppgifter om samtliga gästhamnar som erbjuder platser för besökande, i dagsläget cirka 590 hamnar.
        Här kan Du som användare finna de uppgifter som kan vara av intresse innan ni besöker hamnen. Bland annat kan Ni finna om det finns bränsle, livsmedel, läkare, bank, dusch eller systembolag i aktuell hamn.
        Totalt finns det över 30 viktiga uppgifter att finna på varje hamn. Sjöräddningssällskapets samtliga räddningsstationer finns angivna för de områden där de är verksamma, något som i vissa situationer kan vara direkt livsavgörande.
        Vi har även sammanställt uppgifter om sevärdheter i och omkring hamnarna. Dessa uppgifter samlar vi in årligen från hamncheferna, kommunerna samt de lokala turistbyråerna.
        </p>
    </div>
    <div class="col-6">
        <?php 
        $img = wp_get_attachment_image( 18, 'large' );
        echo $img;
  ?>
    </div>
  </div>

<?php get_footer(); ?>