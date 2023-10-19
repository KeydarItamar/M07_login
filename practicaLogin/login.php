<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Formulario de Usuario</h2>
    <form action="conexionBd.php" method="post">
        <label for="user_id">ID de Usuario:</label>
        <input type="number" id="user_id" name="user_id" ><br><br>

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" ><br><br>

        <label for="surname">Apellido:</label>
        <input type="text" id="surname" name="surname" ><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" ><br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" maxlength="255" required><br><br>

        <label for="rol">Rol:</label>
        <select id="rol" name="rol">
            <option value="alumnat"  id="alumnat" name="alumnat">Alumnat</option>
            <option value="professorat"  id= "professorat" name="professorat" >Professorat</option>
        </select><br><br>

        <label for="active">Estado:</label>
        <input type="radio" id="activo" name="active" value="1" required>
        <label for="activo">Activo</label>
        <input type="radio" id="bloqueado" name="active" value="0" required>
        <label for="bloqueado">Bloqueado</label><br><br>

        <input type="submit" value="Enviar">
    </form>    
    <p>
        <a href="inicio.php">Ya tengo cuenta</a>
    </p>

</body>
</html>