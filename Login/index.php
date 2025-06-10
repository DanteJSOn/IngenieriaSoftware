<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Noir Tattoo</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="validar_login.php" method="POST">
        <label for="username">Usuario:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Ingresar">
    </form>
</body>
</html>
