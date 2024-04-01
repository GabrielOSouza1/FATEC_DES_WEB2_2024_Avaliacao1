<?php
session_start();
include "validar.php";
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {    header("Location: index.php");    exit;}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $ra = $_POST['ra'];
    $plate = $_POST['plate'];
    $filename = ($_POST['vehicle'] === 'car') ? 'carros.txt' : 'motos.txt';    $data = "$name|$ra|$plate\n";   file_put_contents($filename, $data, FILE_APPEND);    $success = "Veículo cadastrado com sucesso.";    header("Location: dashboard.php");    exit;

} ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./css/registro.css">
    <title>Cadastrar Veículo</title>
</head>

<body>
    <h2>Cadastrar Veículo</h2>
    <form method="post">
        <div> <label for="name">Nome Completo:</label> <input type="text" id="name" name="name" required> </div>
        <div> <label for="ra">Registro Acadêmico (R.A.):</label> <input type="text" id="ra" name="ra" required> </div>
        <div> <label for="plate">Placa do Veículo:</label> <input type="text" id="plate" name="plate" required> </div>
        <div>
            <h3>qual o seu veiculo?</h3> <input type="radio" id="car" name="vehicle" value="car" checked> <label for="car">Carro</label> <input type="radio" id="motorcycle" name="vehicle" value="motorcycle"> <label for="motorcycle">Moto</label>
        </div>
        <div> <button type="submit">Cadastrar</button> </div> <?php if (isset($success)) echo "<p>$success</p>"; ?>
    </form>
</body>

</html>