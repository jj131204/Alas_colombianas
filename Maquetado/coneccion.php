<?php 
    
    $mysqli = new mysqli("70.32.23.72", "juristas_alasco", "alas2021", "juristas_alasco");
    
    if($mysqli->connect_errno) {
        echo "Falló la conexion a la base de datos";
    }
    
    header('Access-Control-Allow-Origin: *');
    
    return $mysqli;

?>
