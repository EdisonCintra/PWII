<?php

if (isset($_GET['btn'])){
    $num1 = $_GET["n1"];  //pegando valores
    $num2 = $_GET["n2"]; //pegando valores
    $num3 = $_GET["n3"];


}

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <form action="" method="get">
        <p>
            Número 1:
            <label>
                <input type="text" name="n1">
            </label>
        </p>
        <p>
            Número 2:
            <label>
                <input type="text" name="n2">
            </label>
        </p>
        <p>
            Número 3:
            <label>
                <input type="text" name="n3">
            </label>
        </p>
        <p>
            <input type="submit" name="btn" value="enviar">
        </p>
    </form>
</fieldset>

</body>
</html>
