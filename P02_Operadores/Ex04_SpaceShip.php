<?php
    $a = 5;
    $b = 10;
    $c = 5;
    
    echo "a = $a | b = $b | c = $c <br><br>";

    echo "a > b? 1 é sim, 0 é igual e -1 é não.";
    var_dump($a <=> $b);
    echo "b > c? 1 é sim, 0 é igual e -1 é não.";
    var_dump($b <=> $c);
    echo "a > c? 1 é sim, 0 é igual e -1 é não.";
    var_dump($a <=> $c);
?>