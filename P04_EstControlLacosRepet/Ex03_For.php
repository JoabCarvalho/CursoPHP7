<?php

    for ($i = 1; $i <= 50; $i++){ 
        echo "$i ";
    }

    echo "<br><br>";

    for ($i = 1; $i <= 50; $i++){ 
        
        if($i > 10 && $i < 30) continue;

        if($i === 40) break;
     
        echo "$i ";
    }

    echo "<br><br>";

    echo "Qual sua idade: <select>";
    for ($i = 16; $i <= 110; $i++){ 
        echo "<option value = $i> $i </option>";
    }
    echo "</select>";

    echo"<br><br>";

    echo "Qual ano de seu nascimento: <select>";
    for ($i = date("Y");$i >= date("Y")-100; $i--){
        echo"<option value = $i> $i </option>";
    }
    echo "</select>";
?>