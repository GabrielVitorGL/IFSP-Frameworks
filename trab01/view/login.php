<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="login-container">
        <h1>
            Login
        </h1>
        <h2>
            Sistema escolar escola Pedrinho Alves
        </h2>
        <form method="POST" action="control/login.php">
            <label for="username">Usuário:</label>
            <input type="text" name="username" required>

            <label for="password">Senha:</label>
            <input type="password" name="password" required>

            <button type="submit">Entrar</button>
        </form>
    </div>
</body>

</html>