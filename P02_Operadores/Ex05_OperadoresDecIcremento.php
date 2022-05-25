<?php
    $a = null;
    $b = null;
    $c = 10;
    
    #Aqui se a for null, trás b, se b for null, trás c
    echo $a ?? $b ?? $c;

    echo "<br>";

    echo $a++ ."<br>";
    echo $a++ ."<br>";
    echo $a-- ."<br>";
    echo --$a ."<br>";
?>