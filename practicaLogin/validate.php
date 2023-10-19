<?php

include "dbConf.php";


$PASSWORD= $_POST['contraseña'];
$EMAIL= $_POST['email'];

$conex = mysqli_connect(DBHOST,DBUSER,PSSW,DBNAME);

$select_name = "SELECT * FROM `user` WHERE `email` = '$EMAIL' and `password` = '$PASSWORD'";  

$datos_usuario = mysqli_query($conex,$select_name);
mysqli_num_rows($datos_usuario);

try {
    if (!$conex) {
        echo "Error de conexión: " . mysqli_connect_error();
    } else {

        if ($datos_usuario && mysqli_num_rows($datos_usuario) > 0) {
            foreach ($datos_usuario as $i => $dato) {
                echo "El teu rol es  : ". $dato["rol"]; 
                echo "<br>";
                echo "El teu nom es: " . $dato["name"];
                echo "<br>";
                echo "El teu cognom es  : ". $dato["surname"]; 
                echo "<br>";
                echo "El teu email es  : ". $dato["email"]; 
                echo "<br>";
            }

        } else {
            
            include "inicio.php";
            echo "<br>";
            echo "<p>Error de identificación </p>";

        }
    }
} catch (Exception $ex) {
    echo "Excepción: " . $ex->getMessage();
}finally{
    mysqli_close($conex);
}



?>