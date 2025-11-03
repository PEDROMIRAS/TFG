<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Login Page</title>
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
        </div>
    </main>
    <?php
        include('footer.php');
    ?>
</body>
</html>