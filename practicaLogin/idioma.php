<?php
setcookie("idioma", $_GET["idioma"], time()+86500);
header('location: index.php');
// echo $_GET["idioma"];

?>