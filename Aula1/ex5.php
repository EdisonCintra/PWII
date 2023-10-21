<?php


if (isset($_GET['btn'])){
    $idade = $_GET["idade"];
    $nome = $_GET["nome"];
    $sexo = $_GET["sexo"];

    if ($sexo != "Feminino" and $sexo != "Masculino"){
        echo "<h1>Digite Novamente</h1>";
    }
    else{
        if ($sexo == "Feminino" and $idade <= 25){
            echo "<h1>Aceita!</h1>";

        }
        else{
            echo "<h1>Rejeitado!</h1>";
        }
    }



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
            Nome:
            <label>
                <input type="text" name="nome">
            </label>
        </p>
        <p>
            Sexo (Feminino ou Masculino):
            <label>
                <input type="text" name="sexo">
            </label>
        </p>
        <p>
            Idade:
            <label>
                <input type="text" name="idade">
            </label>
        </p>
        <p>
            <input type="submit" name="btn" value="enviar">
        </p>
    </form>
</fieldset>


</body>
</html>
