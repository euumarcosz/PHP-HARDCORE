<?php

echo 4.15;
echo "<br>";
echo 12.12;
echo "<br>";

$a = -78.1; // Número float negativo 

echo $a;
echo "<br>";

// Defina a variavél $valorFloat 
$valorFloat = $a;

if(is_float($valorFloat)) {
    echo "Sim, podemos ter floats negativos!";
}
echo "<br>";

if(is_float($valorFloat)) {
    echo "É um inteiro";
}