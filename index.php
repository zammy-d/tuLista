<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="login-container">
        <form action="login.php" method="post">
            <h2>Iniciar Sesión</h2>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>

