<?php
setcookie("idioma","Es", time () -3600);
setcookie("idioma","En", time () -3600);
setcookie("idioma","Cat", time () -3600);
header('location: index.php');
?>