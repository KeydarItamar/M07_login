<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inicia sessió de l'usuari</h1>
    <form action="validate.php" method="post">
    <p>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </p>
    <p>
        <label for="contrasenya">Contrasenya</label>
        <input type="password" id="contraseña" name="contraseña">
    </p>
    <p>
        <input type="checkbox" id="remenber" name="remenber">
        <label for="checkbox">Remenber me</label>
    </p>
    <p>
        <button type="submit" name="envia">Enviar</button>
    </p>
    </form>
    <a href="login.php">Crea usuari</a>
    
</body>
</html>