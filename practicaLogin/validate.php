<?php
session_start();
include "dbConf.php";


$PASSWORD= $_POST['contraseña'];
$EMAIL= $_POST['email'];
$IDIOMA= $_POST['idioma'];

$conex = mysqli_connect(DBHOST,DBUSER,PSSW,DBNAME);

$select_name = "SELECT * FROM `user` WHERE `email` = '$EMAIL' and `password` = '$PASSWORD'";  

$datos_usuario = mysqli_query($conex,$select_name);
mysqli_num_rows($datos_usuario);
$dato=mysqli_fetch_array($datos_usuario);
try {
    if (!$conex) {
        echo "Error de conexión: " . mysqli_connect_error();
    } else {
        if ($datos_usuario && mysqli_num_rows($datos_usuario) > 0) {
            $_SESSION["loggedIn"] = true;
            $_SESSION["nombre"]= $dato["name"];
            $_SESSION["rol"]= $dato["rol"];
            $_SESSION["user_id"]=$dato["user_id"];
            header('location: index.php');
            
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
