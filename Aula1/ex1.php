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
<?php

    if (isset($_POST['button'])){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $var = $n1 + $n2;

    }

?>

<form action="" method="post">
    <input type="text" name="n1">
    <input type="text" name="n2">
    <button type="submit" name="button">Calcular</button>
    <p>Resultado: <?php

        if (isset($var)){
            echo "$var";
        }
        else{
            echo "Sem resultado possível";
        }

        ?></p>

</form>
</body>
</html>

