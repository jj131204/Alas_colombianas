<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/svg" href="imagenes2/logo2.svg">
    <title>Alas colombianas</title>
    <link href="style.css" rel="stylesheet" type="text/css" />  <!--137- -->
  </head>
  <body>
  <div>
    <header style="margin-top:-2%;">
      <div class="wrapper">
        <div class="logo">
          <h2><a href="index.php"><img src= "imagenes2/logo2.svg"></a></h2>
        </div>

        <div class="uno_solo">
          <nav>
            <ul>
            <li><a href="index.php">Mapa interactivo</a></li>
              <li><a href="index.php">Quienes somos?</a></li>
              <li><a href="index.php">Nuestra historia</a></li>
              <li><a href="T_Aves.php">Todas las aves</a></li>
              <!--<li><a href="#"><span class="fa fa-search show_search no_link"></span></a></li>-->
            </ul>
          </nav>
        </div>

      </div>

    </header>
    <div>
    <section class = "all">


        <section  class="secc_especies">

    
      
          <?php
          // Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
          $link = new mysqli("70.32.23.72", "juristas_alasco", "alas2021", "juristas_alasco"); // el campo vaciío es para la password. 
          
          $id_ave =  $_GET['identi_ave'];
          ?>
          
          <h2 class="title_especies"> Especies presentes en este departamento</h2>
          <div class ="grid_especies">
            
          <?php foreach ($link->query("SELECT
    sp.sp_id AS ave_id,
    sp.sp_vulgarName AS vulgarName,
    sp.sp_CientificName AS cientificName,
    sp.img_name AS img,
    ha.ha_name As habitat,
    ge.ge_GenderName AS gender,
    fa.fa_familyName AS family,
    ord.or_name AS orders
FROM orders ord
INNER JOIN family fa ON ord.or_id=fa.or_id
INNER JOIN gender ge ON fa.fa_id=ge.fa_id
INNER JOIN species sp ON ge.ge_id=sp.ge_id
INNER JOIN habitats ha ON ha.ha_id=sp.ha_id  WHERE  sp.de_id = $id_ave ") as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
		
    <div class = "border">
      <div  class = "all_final">
        <div class = "img_final">
        <a target= "blank" href="Ave.php?identi_ave=<?= $row['ave_id']; ?>"  ><img class = "logo_search"  src= "ImagenesBD/<?php echo $row['img'] ?>"> </a>
        </div>
        <div class = "desciption_final">
          <div class = "names_title"> Nombre común </div>
          <div class = "names_final"><?php echo $row['vulgarName'] ?> </div>
          <div class = "names_title"> Nombre cientifico </div>
          <div class = "names_final"><?php echo $row['cientificName'] ?></div>
          <div class = "names_title"> Familia </div>
          <div class = "names_final"><?php echo $row['family'] ?> </div>
          <div class = "names_title"> Genero </div>
          <!--<div class = "names_final"> <?php echo $row['gender'] ?></div>
          <div class = "names_title"> Orden </div>-->
          <div class = "names_final"> <?php echo $row['orders'] ?></div>
        <div class = "names_title"> Habitat </div>
          <div class = "names_final"> <?php echo $row['habitat'] ?></div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

        </section>


    </section>
  </body>
</html>

