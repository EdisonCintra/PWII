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

if (isset($_POST['button'])) {
    $n1 = $_POST['n1'];


}


?>


<form action="" method="post">
    <label>
        <input type="text" name="n1">
    </label>
    <button type="submit" name="button">Calcular</button>

    <p>
        <?php
        if (isset($n1)){
            if ($n1%10 ==0 ){
                echo "O número é divisível por 10! <br>";
            }
            if ($n1%2 ==0){
                echo "É divisível por 2! <br>";
            }
            if ($n1%5 ==0){
                echo "É divisível por 5!";
            }
            else{
                echo "Não é divisível por nada!";
            }
        }

        ?>
    </p>




</form>
</body>
</html>

<?php

