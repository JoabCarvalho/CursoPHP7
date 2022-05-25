<?php
    $texto = "Aqui inicia o texto completo de determinado assunto a ser utilizado.";

    $palavraBase = "texto";

    $posicao = strpos($texto, $palavraBase);

    $textoAte = substr($texto, 0, $posicao);
    $textoApos = substr($texto, $posicao + strlen($palavraBase), strlen($texto));

    echo "$texto <br> Palavra base é $palavraBase <br>";
    echo "Texto até a palavra base é: $textoAte <br>";
    echo "Texto após a palavra base é: $textoApos <br>";
?>