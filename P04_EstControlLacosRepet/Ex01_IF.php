<?php

    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeAdulto = 28;
    $idadeMelhor = 60;
    $idadeLimite = 100;

    $suaIdade = 0;

    if($suaIdade <= 12) {
        echo 'Você é uma criança!';
    } elseif($suaIdade > $idadeCrianca && $suaIdade < $idadeMaior) {
        echo 'Você é um adolescente!';
    } elseif($suaIdade >= $idadeMaior && $suaIdade < $idadeAdulto) {
        echo 'Você é um jovem!';
    } elseif($suaIdade >= $idadeAdulto && $suaIdade < $idadeMelhor) {
        echo 'Você é um adulto!';
    } elseif($suaIdade >= $idadeMelhor && $suaIdade < $idadeLimite) {
        echo 'Você está na melhor idade! Aproveite!';
    } elseif($suaIdade >= $idadeLimite && $suaIdade < 115) {
        echo 'É bom o senhor(a) se sentar! Irei solicitar uma prova de vida!';
    } else {
        echo 'Deixe de conversa, você não existe mais!';
    }

    echo '<br><br>';

    #IF simples
    echo ($suaIdade > $idadeCrianca) ? "Você é maior que uma criança!" : "Você ainda é uma criança!";
?>