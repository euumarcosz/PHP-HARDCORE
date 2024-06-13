<?php
 
for ($i = 0; $i <= 10; $i++) { //Loop - elemento tabelas
    echo"<br>";
    for ($contador = 0; $contador <= 10; $contador++){ //Loop - Numeracao elemento titulo
        while ($i == $contador) {
            echo"<br>";
            echo "\n\nTabuada do $contador\n <br>";
          
            break;
        
        }
            }
            
        for ($num = 0; $num <= 10; $num ++){ //Loop para determinar o segundo elemento e realizar a multiplicação
            
        $calc = $i * $num;
        echo "$i X $num = $calc\n <br>";
        }
}

// Com o contador "(i)" = para determinar uma sequência de números 
// EX: ($i = 0; $i <= 10; $i ++)
// Resposta: "i" para determinar a primeira sequência de números, "1 X ..." , "2 X ..", e assim por diante, depois uma variável "contador" que vai contar em qual número da variável "i'
