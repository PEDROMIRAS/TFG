<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f97389225c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="shortcut icon" href="../assets/logo2.png" type="image/png">
    <title>Login - Acho Q Como</title>
</head>
<body>
    <header>
        <!-- Botón para volver -->
        <button class="back-button" onclick="window.location.href='../index.php'">
            <i class="fa-solid fa-arrow-left"></i>
            Volver
        </button>
    </header>
    
    <main>
        <div class="login-container">
            <h1>Login</h1>
            <form action=" " method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
            <div class="register-link">
                <p>¿No tienes cuenta? <a href="../registro.php">Regístrate aquí</a></p>
            </div>
        </div>
    </main>
    
    <?php include('footer.php'); // footer.php está en la misma carpeta (public/) ?>
</body>
</html>