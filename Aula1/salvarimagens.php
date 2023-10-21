<?php
if (isset($_POST['cadastrar'])){
    $temporario = $_FILES['fotos']['tmp_name'];
    $pasta = "img/";
    $novoNome = uniqid().".jpg";
    if (move_uploaded_file($temporario,$pasta.$novoNome)){
        $nome = $_POST['nome'];
        $cidade =$_POST['cidade'];
        $arq = "pessoas.txt";
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
<h1>Cadastro de pessoas</h1>
<form action="" method="get" enctype="multipart/form-data">

    <p>
        Selecione uma foto <br>
        <label>
            <input type="file" name="foto">
        </label>
    </p>
    <p>
        Nome: <br>
        <label>
            <input type="text" name="nome">
        </label>
    </p>
    <p>
        Cidade <br>
        <label>
            <input type="text" name="cidade">
        </label>
    </p>
    <p>
        Escolha uma fota <br>
        <input type="file" name="foto">
    </p>
    <p>
        <input type="submit" name="btn" value="enviar">
    </p>

</form>

</body>
</html>


<?php

if (isset($_POST['btn'])){
    $nt = $_FILES['foto']['tmo_name'];
    $novoNome = uniqid().".jpg";
    $n = $_POST['nome'];
    $c = $_POST['cidade'];
    $file = "pop.txt";
    $arquivo = fopen($file, "a+");
    fwrite($arquivo, "$n;$c" . PHP_EOL);
    fclose($arquivo);


}

?>