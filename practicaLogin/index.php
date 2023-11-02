<?php
session_start();   
include "dbConf.php"; 
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
    
    <h2><?php 
        if(isset($_COOKIE["idioma"])){
            if($_COOKIE["idioma"]=="Es"){
            echo "Hola " . $_SESSION["nombre"] . " eres un ". $_SESSION["rol"];
            }else if($_COOKIE["idioma"]== "Cat"){
                echo "Hola " . $_SESSION["nombre"] . " ets un ". $_SESSION["rol"];
            }else if($_COOKIE["idioma"]=="En"){
                echo "Hello " . $_SESSION["nombre"] . " you are a  ". $_SESSION["rol"];
            }else{
                echo "Hola " . $_SESSION["nombre"] . " eres un ". $_SESSION["rol"];
        }
    }else
        echo "Hola " . $_SESSION["nombre"] . " eres un ". $_SESSION["rol"]
        

    ?></h2>

<?php

if(isset($_COOKIE["idioma"])){
    if ($_COOKIE["idioma"]== "Es"){
            ?>
            <a href="idioma.php?idioma=Cat" style="color: blue;">Cat</a>
            <a href="idioma.php?idioma=Es"  style="color: red;">Es</a>
            <a href="idioma.php?idioma=En"  style="color: blue;">En</a>
            <a href="deleteCookie.php">Eliminar</a>
    <?php
        }else if($_COOKIE["idioma"]=="Cat"){
            ?>
            <a href="idioma.php?idioma=Cat" style="color: red;">Cat</a>
            <a href="idioma.php?idioma=Es"  style="color: blue;">Es</a>
            <a href="idioma.php?idioma=En"  style="color: blue;">En</a>
            <a href="deleteCookie.php">Borrar</a>

        <?php
             }else if($_COOKIE["idioma"]=="En"){
        ?>
            <a href="idioma.php?idioma=Cat" style="color: blue;">Cat</a>
            <a href="idioma.php?idioma=Es"  style="color: blue;">Es</a>
            <a href="idioma.php?idioma=En"  style="color: red;">En</a>
            <a href="deleteCookie.php">Delete</a>
        <?php
    }
    }else{
    ?>
            <a href="idioma.php?idioma=Cat" style="color: blue;">Cat</a>
            <a href="idioma.php?idioma=Es"  style="color: red;">Es</a>
            <a href="idioma.php?idioma=En"  style="color: blue;">En</a>
            <a href="deleteCookie.php">Eliminar</a>
    <?php
    }
    ?>
    <?php
        $conex = mysqli_connect(DBHOST,DBUSER,PSSW,DBNAME);
        $select_name = "SELECT * FROM `user` WHERE `rol` = 'alumnat'";  
        $datos_usuario = mysqli_query($conex,$select_name); 
        mysqli_num_rows($datos_usuario);
        $dato=mysqli_fetch_array($datos_usuario);

    ?>

<?php
if ($_SESSION["rol"] == "professorat") {
?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
        </tr>
        <?php
        foreach ($datos_usuario as $i => $datoU) {
        ?>
            <tr>
                <td><?php echo $datoU["name"]; ?></td>
                <td><?php echo $datoU["surname"]; ?></td>
                <td><?php echo $datoU["email"]; ?></td>
            </tr>
        <?php
        } 
        ?>
    </table>
<?php
} 
?>

<br/>

<?php

if(isset($_COOKIE["idioma"])){
if ($_COOKIE["idioma"]=="Es"){
        ?>
    <a href="http://localhost/M07_login/practicaLogin/mostrarInfo.php?user_id=<?php echo $_SESSION['user_id'];?>">Mostrar información</a>
    <a href="disconect.php">Desconectar</a>
    <?php
    }else if($_COOKIE["idioma"]=="Cat"){
        ?>
      
    <a href="http://localhost/M07_login/practicaLogin/mostrarInfo.php?user_id=<?php echo $_SESSION['user_id'];?>">Mostra informació</a>
    <a href="disconect.php">Desconecta</a>
        <?php
    }else if($_COOKIE["idioma"]=="En"){
        ?>
      
    <a href="http://localhost/M07_login/practicaLogin/mostrarInfo.php?user_id=<?php echo $_SESSION['user_id'];?>">Show information</a>
    <a href="disconect.php">Desconect</a>
        <?php
    }
} else{
    ?>
    <a href="http://localhost/M07_login/practicaLogin/mostrarInfo.php?user_id=<?php echo $_SESSION['user_id'];?>">Mostrar información</a>
    <a href="disconect.php">Desconectar</a>
    <?php

} 
    ?>


    <?php
        $conex = mysqli_connect(DBHOST,DBUSER,PSSW,DBNAME);
        $select_name = "SELECT * FROM `user` WHERE `rol` = 'alumnat'";  
        $datos_usuario = mysqli_query($conex,$select_name); 
        mysqli_num_rows($datos_usuario);
        $dato=mysqli_fetch_array($datos_usuario);

    ?>



</body>
</html>