<?php
    $anoNascimento = 1989; #Inteiro
    $nomeCompleto = 'Joab Francisco de Carvalho Morais de Sales'; #String
    
    echo $nomeCompleto . ', é nascido em ' . $anoNascimento . '.'; #Concatenando através do ponto (.)

    unset($anoNascimento); #Destruindo a variável
    
    echo '<br/>';echo '<br/>'; #Duas quebras de linhas

    if(isset($nomeCompleto)){ #Se = if / Se Existir = isset
        echo 'Existe a váriavel "$nomeCompleto" !';
    }

    $salario = 5687.84; #Float
    $bloqueado = true; #Boleano

    $mesaFrutas = array('Laranja','Acerola','Manga','Morango','Jambo'); #Array

    $nascimento = new DateTime(); #Objeto

 #   $arquivo = fopen("Caminho_do_arquivo_a_ser_aberto", "r"); #Arquivo

    $nulo = NULL; #Nulo é diferente de Vazio
    $vazio = "";
?>