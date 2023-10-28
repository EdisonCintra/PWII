<?php
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
        <p>Nome: <br> <input type="text" name="nome" value="<?php echo $_GET['nome']?>"></p>
        <p>Telefone: <br> <input type="text" name="telefone" value="<?php echo $_GET['telefone']?>"></p>
        <p>Cidade: <br> <input type="text" name="cidade" value="<?php echo $_GET['cidade']?>"></p>
        <p>Estado: <br> <input type="text" name="estado" value="<?php echo $_GET['uf']?>"></p>
        <p><input type="submit" value="cadastrar" name="btn"></p>
    </form>
</fieldset>



</body>
</html>
