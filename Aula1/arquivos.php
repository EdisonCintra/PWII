<?php

    $file = "texto.txt";
    $arquivo = fopen($file, "a+");
    fwrite($arquivo, "Vasco" . PHP_EOL);
    fclose($arquivo);
    echo "<h2>Gravado com sucesso</h2>";






