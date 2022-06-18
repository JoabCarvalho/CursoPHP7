<?php

    $carros [0][0] = 'GM';
    $carros [0][1] = 'Celta';
    $carros [0][2] = 'Cobalt';
    $carros [0][3] = 'Prisma';

    $carros [1][0] = 'Fiat';
    $carros [1][1] = 'Uno';
    $carros [1][2] = 'Palio';
    $carros [1][3] = 'Argo';

    echo "O carro da posição 0 | 3 é o " . $carros[0][3] . ".<br><br>";

    echo "O carro da última posição da coluna 1 é o " . end($carros[1]) . ".";
?>