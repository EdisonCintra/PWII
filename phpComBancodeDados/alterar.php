<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>Alterar dados do Aluno</legend>
    <form action="" method="GET">
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <p>Nome: <br> <input type="text" name="nome" value="<?php echo $_GET['nome'];?>"></p>
        <p>Telefone: <br> <input type="text" name="tel" value="<?php echo $_GET['tel'];?>"></p>
        <p>Cidade: <br> <input type="text" name="cidade" value="<?php echo $_GET['cidade'];?>"></p>
        <p>Estado: <br> <input type="text" name="uf" value="<?php echo $_GET['uf'];?>"></p>
        <p><input type="submit" value="Alterar" name="bt"></p>
    </form>
</fieldset>
</body>
</html>

<?php
require "conexao.php";
if (isset($_GET['bt'])) {
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $tel = $_GET['tel'];
    $cidade = $_GET['cidade'];
    $uf = $_GET['uf'];
    $edit = $conexao->prepare("update alunos set nome = '$nome', telefone = '$tel', cidade = '$cidade', estado = '$uf' where id = '$id'");
    $edit->execute();
    echo "<h3>Aluno(a) $nome alterado com sucesso!!!</h3>";
    echo "<h3><a href='cad-alunos.php'>Voltar</a></h3>";
}

?>