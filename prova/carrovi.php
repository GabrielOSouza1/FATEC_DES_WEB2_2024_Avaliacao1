<?php session_start();
include "validar.php";
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {        header("Location: index.php");        exit;    }
    $carros = file_get_contents('carros.txt');
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="./css/carovi.css">
    <title>Visualizar Carros</title>
</head>

<body>
    <h2>Carros Cadastrados</h2>
    <pre><?php echo $carros; ?></pre>
</body>

</html>