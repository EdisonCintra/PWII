<?php
include "conexao.php";
if (isset($_GET['btn'])){
    $nome = $_GET['nome'];
    $telefone = $_GET['telefone'];
    $cidade= $_GET['cidade'];
    $estado = $_GET['estado'];
    $cad = $conexao->prepare("insert into alunos(nome,telefone,cidade,estado) values(:n, :t, :c, :e)");
    $cad->bindValue(":n",$nome);
    $cad->bindValue(":t",$telefone);
    $cad->bindValue(":c",$cidade);
    $cad->bindValue(":e",$estado);
    $cad->execute();
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
    <legend>Cadastro de Alunos</legend>
    <form action="" method="get">
        <p>Nome: <br> <input type="text" name="nome"></p>
        <p>Telefone: <br> <input type="text" name="telefone"></p>
        <p>Cidade: <br> <input type="text" name="cidade"></p>
        <p>Estado: <br> <input type="text" name="estado"></p>
        <p><input type="submit" value="cadastrar" name="btn"></p>
    </form>
</fieldset>

</body>
</html>
