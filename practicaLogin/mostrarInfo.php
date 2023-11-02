<?php
session_start();
include 'dbConf.php';
if  ($_SESSION["loggedIn"] == false){
    header('location: inicio.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
    if(isset($_COOKIE["idioma"])){
            if($_COOKIE["idioma"]=="Es"){
                echo "Información detallada del usuario";
            }else if($_COOKIE["idioma"]== "Cat"){
                echo "Informació en detall del usuari";
            }else if($_COOKIE["idioma"]=="En"){
                echo "User information details";
            }else{
                echo "Información detallada del usuario";
            }
        }else{
        echo "Información detallada del usuario";
        }
    ?>
    </h1>
    <?php 
            $conex = mysqli_connect(DBHOST,DBUSER,PSSW,DBNAME);

            $ID = $_GET["user_id"];        
            $select_name = "SELECT * FROM `user` WHERE `user_id` = '$ID'";  

            $datos_usuario = mysqli_query($conex,$select_name);
            mysqli_num_rows($datos_usuario);

            $dato= mysqli_fetch_array($datos_usuario);
            
        
            if(!$conex){
                echo "Error de connexio: " . mysqli_connect_error();
            }else{
                echo "Id de usuario: ". $dato["user_id"]. "<br/>";
                echo "Nom: ". $dato["name"]. "<br/>";
                echo "Apellido: ". $dato["surname"]. "<br/>"; 
                echo "Email: ". $dato["email"]. "<br/>";
                echo "Rol: ".  $dato["rol"]. "<br/>";
                echo "Actiu: ". $dato["active"]. "<br/>";
                
            }
            mysqli_close($conex);
    ?>
    <br/>

    <?php

if(isset($_COOKIE["idioma"])){
if ($_COOKIE["idioma"]=="Es"){
        ?>
        <a href="index.php">VOLVER</a>

    <?php
    }else if($_COOKIE["idioma"]=="Cat"){
        ?>
      
      <a href="index.php">TORNAR</a>

        <?php
    }else if($_COOKIE["idioma"]=="En"){
        ?>
    <a href="index.php">RETURN</a>

        <?php
    }
}else{
    ?>
    <a href="index.php">VOLVER</a>
    <?php
}
    ?>

</body>
</html>