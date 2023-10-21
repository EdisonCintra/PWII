<?php



if (isset($_GET['btn'])) {
    $n1 = $_GET['nome'];

    $file = "formulario.txt";
    $arquivo = fopen($file, "a+");
    fwrite($arquivo, "$n1" . PHP_EOL);
    fclose($arquivo);




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

<form action="">
    <fieldset>
        <label>
            Nome: <input type="text" name="nome">
            <br>
            <br>
            <input type="submit" value="cadastrar" name="btn" style="padding: 10px; background-color: greenyellow; font-weight: bolder">
        </label>
    </fieldset>
</form>

</body>
</html>


<?php

$open = file($file);
foreach ($open as $linha){
    $p = explode(";",$linha);
    echo "<p> Nome: $p[0] </p>";

}
?>