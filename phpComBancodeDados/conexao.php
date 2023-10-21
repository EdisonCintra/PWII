<?php

try {
    $conexao = new PDO('mysql:host=localhost:3306;dbname=ads2023', 'root', '');
}catch (Exception $erro){
    echo "<h1> Mensagem de erro : {$erro->getMessage()} </h1>";
    echo "<br>";
    echo "<h2> Código de Erro : {$erro->getCode()} </h2>";



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

</body>
</html>
