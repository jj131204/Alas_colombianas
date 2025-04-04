<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/svg" href="imagenes2/logo2.svg">
    <title>Alas colombianas</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="test"> <!--MAl pero funciona xD-->
    <header>

      <div class="wrapper">
        <div class="logo">
          <h2><a href="index.php"><img src= "imagenes2/logo2.svg"></a></h2>
        </div>

        <div class="uno_solo">
          <nav>
            <ul>
              <li><a href="#mapa_interactivo">Mapa interactivo</a></li>
              <li><a href="#quienes_somos">Quienes somos</a></li>
              <li><a href="#nuestra_historia">Nuestra historia</a></li>
              <li><a href="T_Aves.php">Todas las aves</a></li>
              <!--<li><a href="#"><span class="fa fa-search show_search no_link"></span></a></li>-->
            </ul>
          </nav>
          <!--<div class="search">
            <img class = "logo_search"  src= "imagenes/buscar.svg">
            <input type="text" class="input_search"  placeholder="Buscar...">
            <button class="search_result"> Buscar </button>
          </div>-->
        </div>

      </div>
    
    </header>
    </div>
    <!--imagen hero + texto-->
    
    <section class="hero">
      <div class="banner__info">
        <h1 class="title">Alas Colombianas</h1>
        <p class = "text_hero">Alas Colombianas es una iniciativa de Kybernets.org. Actualmente puedes consultar las aves del departamento del Atlantico.</p>
        <p class = "text_hero">Poco a poco agregaremos las demas aves de Colombia</p>
      </div>
    </section>
    <!--cierre de imagen hero + texto-->

    <section class = "all">

   
      <!--Buscador-->
      <section class = "big_search">
            <fieldset class="square">

              <h2 style="text-align:center;"> Encuentra el ave que buscas</h2>
              <div class ="">
                <form>
                  <br>
                  <div class="b_search">
                    <img class = "big_logo_search"  src= "imagenes/buscar.svg">
                    <input type="text" name="buscar" class="big_input_search" placeholder="Buscar...">
                    <input type="submit" name="enviar" class = "buscar" > </input>
                  </div>



                  <?php

    $link = new mysqli("localhost", "root", "", "alas_colombianas");

    if (isset($_GET['enviar'])){
      $busqueda =  $_GET['buscar'];

      $consulta = mysqli_query( $link, "SELECT
      sp.sp_id AS ave_id,
      sp.sp_vulgarName AS vulgarName,
      sp.sp_CientificName AS cientificName,
      sp.img_name AS img,
      ha.ha_name As habitat,
      ge.ge_GenderName AS gender,
      fa.fa_familyName AS family,
      ord.or_name As orders
  FROM orders ord
  INNER JOIN family fa ON ord.or_id=fa.or_id
  INNER JOIN gender ge ON fa.fa_id=ge.fa_id
  INNER JOIN species sp ON ge.ge_id=sp.ge_id
  INNER JOIN habitats ha ON ha.ha_id=sp.ha_id WHERE  sp_vulgarName  LIKE '%$busqueda%'  LIMIT 5");

      while($row = $consulta->fetch_array()){ ?>

<div class = "border1" >
    <div  class = "all_final">
      <div class = "img_final">
      <a target= "blank" href="Ave.php?identi_ave=<?= $row['ave_id']; ?>"  ><img class = "logo_search"  src= "ImagenesBD/<?php echo $row['img'] ?>"> </a>
      </div>

      <div class = "desciption_final">
        <div class = "names_title"> Nombre comun </div>
        <div class = "names_final"><?php echo $row['vulgarName'] ?> </div>
        <div class = "names_title"> Nombre cientifico </div>
        <div class = "names_final"><?php echo $row['cientificName'] ?></div>
        <div class = "names_title"> Familia </div>
        <div class = "names_final"><?php echo $row['family'] ?> </div>
        <div class = "names_title"> Genero </div>
        <div class = "names_final"> <?php echo $row['gender'] ?></div>
        
      </div>
    </div>
  </div> <br><br>
  
      <?php
      }
  }
?>

    <br>
    <br>
      </form>

    </div>
    <div class = "options_search">
    <a href="habitats.php">Buscar especies segun su habitat</a>
    </div>
            </fieldset>
        </section>
    <!--cierre buscador-->

    <!--Mapa interactivo-->
        <section id="mapa_interactivo"  class = "interactive_map">

          <h2 class = "title_map" style="text-align:center;">Mapa Interactivo </h2>
          <p class="subtitle_map">
           En esta seccion podras ver en que parte del atlantico se encuentran ubicadas nuestras aves.
          </p>
          <div class = "grid_map">
            <div id = "map">
            </div>
            <div id = "list_bird">
              
              <!-- <input type="submit" class = "boton_aves" value="Aves" name="test1">-->
            </div>
          </div>
        </section>


    <!--cierre mapa interactivo-->

    

    <!--quienes somos-->
        <section id="quienes_somos" class = "team">
          <h2 class = "team_title"> Quienes somos</h2>
          <div class = "team_members">
            <div>
              <img class = "img_team" src= "imagenes/juan.PNG">
              <p class = "names_team">Juan Jose Arteta</p>
              <p class = "names_team">Desarrollador web front end</p>

            </div>

            <div>
              <img class = "img_team" src= "imagenes/adrian.jpeg">
              <p class = "names_team">Adrian Guerra</p>
              <p class = "names_team">Desarrollador web back end</p>
            </div>

            <div>
              <img class = "img_team" src= "imagenes/camilo.jpeg">
              <p class = "names_team">Camilo Valencia</p>
              <p class = "names_team">Desarrollador web back end</p>
            </div>
          </div>
        </section>
    <!--cierre quienes somos-->

    <!--Nuestra historia-->
        <section id="nuestra_historia" class  = "history_alas">
          <h2 class = "title_history" style="text-align:center;"> Nuesta historia</h2>
          <p> 
          La idea de querer hacer alas colombianas nació de una reunión en casa de una amigo,  donde varios chicos pensaron que seria interesante hacer una web donde se pudiera encontrar e identificar las aves de Colombia, y que sea valida su taxonomía.
Y afrontamos como proyecto hacerlo, la versión que estamos presentando es una pequeña parte de lo que va hacer Alas colombianas en un futuro.          </p>
        </section>
      <br>
      <br>
      <br>
    </section>
    <!--cierre nuestra historia-->


    <footer>
        <h2 > Primera version de Alas Colombianas </h2>
    </footer>

    <script src="alas1.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKI9jsJndhDWV1MxsHY1bW40YdQTR1CYc&callback=iniciarMap"></script>
  </body>
</html>
