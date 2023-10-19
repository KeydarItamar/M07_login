
<?php

include "dbConf.php";

$conex = mysqli_connect(DBHOST,DBUSER,PSSW,DBNAME);

$ID = $_POST['user_id'];
$NAME= $_POST['name'];
$SURNAME= $_POST['surname'];
$PASSWORD= $_POST['password'];
$EMAIL= $_POST['email'];
$ROL= $_POST['rol'];
$ACTIVE= $_POST['active'];
$datos_usuario; 

$insert = "INSERT INTO `user`(`user_id`, `name`, `surname`, `password`, `email`, `rol`, `active`) 
VALUES ('$ID','$NAME','$SURNAME','$PASSWORD','$EMAIL','$ROL','$ACTIVE')";


$mostra= "SELECT * FROM USER";



if(!$conex){
    echo "Error de connexio: " . mysqli_connect_error();

}else{
    echo "funciona";
    $datos_usuario=mysqli_query($conex, $insert);
    header('location: inicio.php');
}
mysqli_close($conex);


?>