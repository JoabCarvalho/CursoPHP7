<?php
    $nome = 'Joab';

    function funcaoUm(){
        global $nome;
        echo 'Função Um, nome da variável global: '. $nome;
    }

    function funcaoDois(){
        $nome = 'Ricardo';
        echo 'Função Dois, nome do escopo da função dois: '. $nome;
    }

    funcaoUm();

    echo '<br/>';echo '<br/>';

    funcaoDois();
?>