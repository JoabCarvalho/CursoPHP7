<?php
    $nome = "joab carvalho";
    
    #Aqui tudo fica maiusculo
    echo strtoupper($nome);
    echo "<br>";

    #Aqui tudo fica minusculo
    echo strtolower($nome);
    echo "<br>";

    #Aqui fica maiusculo 1 letra de cada palavra
    echo ucwords($nome);
    echo "<br>";

    #Aqui fica maiusculo 1 letra da 1 palavra
    echo ucfirst($nome);
    echo "<br>";
?>