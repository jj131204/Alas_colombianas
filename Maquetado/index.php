<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Alas colombianas</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="test"> <!--MAl pero funciona xD-->
    <header>

      <div class="wrapper">
        <div class="logo">
          <h2><a href="index.html"><img src= "imagenes2/logo2.svg"></a></h2>
        </div>

        <div class="uno_solo">
          <nav>
            <ul>
              <li><a class = "mapa_scroll">Mapa interactivo</a></li>
              <li><a href="#">Quienes somos?</a></li>
              <li><a href="#">Nuestra historia</a></li>
              <li><a href="#">Todas las aves</a></li>
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
        <h1 class="title">Alas colombianas</h1>
        <p class = "text_hero">Alas colombianas es una iniciativa de Kybernets.org. Actualmente puedes consultar las aves del departamento del atlantico.</p>
        <p class = "text_hero">Poco a poco agregaremos las demas aves de colombia</p>
      </div>
    </section>
    <!--cierre de imagen hero + texto-->


    <section class = "all">

    <!--Mapa interactivo-->
        <section class = "interactive_map">

          <h2 class = "title_map" style="text-align:center;">Mapa Interactivo </h2>
          <p class="subtitle_map">
           En esta seccion podras ver en que parte del atlantico se encuentran ubicadas nuestras aves.
          </p>
          <div class = "grid_map">
            <div id = "map">
            </div>
            <div id = "list_bird">
               <button class="boton_aves"> Aves encontradas </button>
            </div>
          </div>
        </section>
      
        <?php 
            require "conexion.php";
            
            $consulta = "SELECT species.img_name AS species_imgName species.sp_vulgarName AS speciesName, gender.ge_GenderName AS genderName, family.fa_familyName AS familyName, orders.or_name AS OrderName FROM `species` RIGHT JOIN gender ON gender.ge_id = species.ge_id RIGHT JOIN family ON family.fa_id = gender.ge_id RIGHT JOIN orders ON orders.or_id = family.or_id";
            
            if($query = $mysqli->query($consulta)){
                $row = $query->fetch_array();
                $respone = array($row['species_imgName'],$row['speciesName'],$row['genderName'],$row['familyName'],$row['OrderName']);
                echo json_encode($respone);
            }else{
                echo "error";
            }
            
        ?>
        <script>
          fetch('https://alascolombianas.kybernets.org/index.php')
        .then(response => response.json())
        .then(data => {
            let adrian = document.getElementById("list_bird");
            adrian.innerHTML= `<img src="${data[0]}">
            <p>Especie: ${data[1]}<p>
            <p>genero: ${data[2]}<p>
            <p>Familia: ${data[3]}<p>
            <p>Orden: ${data[4]}<p>
            <p>Hola soy Adrian</p>
            `;
        });
        </script>
    <!--cierre mapa interactivo-->

    <!--Buscador-->
        <section class = "big_search">
            <fieldset class="square">

              <h2 style="text-align:center;"> Encuentra el ave que buscas</h2>
              <div class ="">
                <form>
                  <br>
                  <div class="b_search">
                    <img class = "big_logo_search"  src= "imagenes/buscar.svg">
                    <input type="text" class="big_input_search" placeholder="Buscar...">
                  </div>
                  <br>
                  <br>
                  <div class = "options_s">
                    <div class = "options_search">
                    <a href="habitat.html">Habitat</a>
                    </div>
                    <div class = "options_search">
                    <a href="p_extincion.html">En peligro de extincion</a>
                    </div>
                  </div>

          <!--  <textarea> </textarea> -->
                </form>
              </div>
            </fieldset>
        </section>
    <!--cierre buscador-->

    <!--quienes somos-->
        <section class = "team">
          <h2 class = "team_title"> Quienes somos?</h2>
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
        <section class  = "history_alas">
          <h2 class = "title_history" style="text-align:center;"> Nuesta historia</h2>
          <p> 
            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
          </p>
        </section>

    </section>
    <!--cierre nuestra historia-->


    <footer>
      <p>By: JUan Jose Arteta Maury </p>
    </footer>

    <script src="script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKI9jsJndhDWV1MxsHY1bW40YdQTR1CYc&callback=iniciarMap"></script>

  </body>
</html>