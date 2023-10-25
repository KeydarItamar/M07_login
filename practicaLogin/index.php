<?php
session_start();   
include "dbConf.php"; 
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
        echo "Hola " . $_SESSION["nombre"] . " eres un ". $_SESSION["rol"];
    ?></h2>

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


<a href="http://localhost/M07_login/practicaLogin/mostrarInfo.php?user_id=<?php echo $_SESSION['user_id']; ?>">Mostrar información</a>
<a href="disconect.php">Desconectar</a>

</body>
</html>