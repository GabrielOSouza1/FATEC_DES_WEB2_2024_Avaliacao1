<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'portaria' && $password === 'FatecAraras') {
        $_SESSION['logged_in'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Login ou senha incorretos.";
    }
} ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form method="post">
        <div class="container">
        <div> <label class="label" class="oi" for="username">Usuário:</label> <input type="text" id="username" name="username" required> </div>
        <div> <label class="label" for="password">Senha:</label> <input type="password" id="password" name="password" required> </div>
        <div> <button type="submit">Entrar</button> </div>
        </div>
        
    </form>
</body>

</html>