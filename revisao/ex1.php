<?php

if(isset($_POST['enviar'])){
    $entrada = $_POST['time1'];
    $saida = $_POST['time2'];

    $horasTrabalhadas = (strtotime($saida) - strtotime($entrada)) / 3600;
    echo "$horasTrabalhadas horas trablhadas";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="time1">entrada</label>
        <input name="time1" type="time">
        <label for="time2">saída</label>
        <input name="time2" type="time"><br>
        <button name="enviar">Enviar</button>
    </form>
</body>

</html>