<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jogo</title>
</head>

<body>
<div>
<form method="post">
<label for="tentativa">Qual numero ? :</label>
<input type="number" name="tentativa">
<br>
<br>
<button type="submit">Enviar</button>
</form>
</div>
<?php 
$num = mt_rand(1, 100);
session_start();
if (!isset($_SESSION['num'])) {
    $_SESSION['num'] = $num;
}
if ($_POST) {
    echo "<br>";
    $valor = $_POST['tentativa'];

    if ($valor < $_SESSION['num']) {
        echo "O numero é menor";
    }
    if ($valor > $_SESSION['num']) {
        echo "O numero é maior";
    }
    if ($valor == $_SESSION['num']) {
        echo "Parábens você acertou";
        unset($_SESSION['num']);
    }
}

?>
</body>