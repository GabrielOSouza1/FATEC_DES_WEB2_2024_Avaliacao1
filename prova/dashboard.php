<?php
session_start();

include "validar.php";


if (!file_exists('carros.txt')) {    $file = fopen('carros.txt', 'w');    fclose($file);}
if (!file_exists('motos.txt')) {    $file = fopen('motos.txt', 'w');    fclose($file);}



?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="./css/dashboard.css">
</head>

<body>
    <div class="container">
        <h2>Painel de controle</h2>
        <h3>Vamos registrar um novo veiculo?</h3>
        <div class="menu"> <a href="registro.php" class="button">Cadastrar veiculo</a>
            <h3>Visualizar cadastro dos veículos!</h4> <a href="carrovi.php" class="button">Visualizar Carros</a> <a href="motovi.php" class="button">Visualizar Motos</a> <a href="logout.php" class="button">Sair</a>
        </div>
    </div>
</body>

</html>
