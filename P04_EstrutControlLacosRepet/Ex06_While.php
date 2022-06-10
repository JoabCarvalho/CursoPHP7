<?php

    $condicao = true;

    while ($condicao) {
        
        $numero = rand(1,30);

        echo $numero . "  ";
        
        if ($numero === 10) {
            echo "O último número sorteado foi: " .$numero. " (Dez)!";
            $condicao = false;
        }
       
    }

?>