<?php
    $nome = "Curso PHP";

    echo $nome . " mais alguma coisa, através do '.' .<br>";

    $nome .= " mais alguma coisa, através do '.=' .<br> <br>";

    echo $nome;

    $valorTotal = 0;
    echo "Valor = $valorTotal. <br>";

    $valorTotal += 100;
    echo "Valor = $valorTotal. Pois foi somando 100 através do += . <br>";
    
    $valorTotal *= .10;
    echo "Valor = $valorTotal. Pois foi pego apenas 10%, através do *= .10 . <br>";
?>