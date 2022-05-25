<?php
    $a = 10;
    $b = 12;
    $c = 10;
    $d = 12.0;
    $e = 3;

    echo "a = 10 | b = 12 | c = 10 | d = 12.0 | e = 3 <br> a > b?";
    
    var_dump($a > $b);
    echo "a < b?";

    var_dump($a < $b);
    echo "a = b? Não, = atribui o valor de b à a. Mas me trouxe 12 para o valor de a.";

    var_dump($a = $b);
    echo "c == b?";

    var_dump($c == $b);
    echo "b === d? Mesmo valor e tipo?";

    var_dump($b === $d);
    echo "a é diferente de b?";

    var_dump($a != $b);
    echo "d é diferente de e?";

    var_dump($d > $e);
    echo "<br>";
?>