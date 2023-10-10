
<?php

define("DBNAME", 'users' );
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPSW", '');
define("PSSW", "");
$conex = mysqli_connect(DBHOST,DBUSER,PSSW,DBNAME);

$ID = $_POST['user_id'];
$NAME= $_POST['name'];
$SURNAME= $_POST['surname'];
$PASSWORD= $_POST['password'];
$EMAIL= $_POST['email'];
//$ROl= $_POST['rol'];
$ACTIVE= $_POST['active'];


$insert = "INSERT INTO `user`(`user_id`, `name`, `surname`, `password`, `email`, `rol`, `active`) 
VALUES ('$ID','$NAME','$SURNAME','$PASSWORD','$EMAIL','$ROL','$ACTIVE')";


$mostra= "SELECT * FROM USER";

if(!$conex){
    echo "Error de connexio: " . mysqli_connect_error();

}else{
    echo "funciona";

    mysqli_query($conex, $insert);
  

}

?>