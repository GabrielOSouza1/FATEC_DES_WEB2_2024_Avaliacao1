<?php session_start();
include "validar.php";
   if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {        header("Location: index.php");        exit;    }
    $motos = file_get_contents('motos.txt');
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/motovi.css">
    <title>Visualizar Motos</title>
</head>

<body>
    <h2>Motos Cadastradas</h2>
    <pre><?php echo $motos; ?></pre>
</body>

</html>