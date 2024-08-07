<?php

// Checando números decimais
// Float


$a = "Teste";
$b = 12.8;

if(is_float($a)) {
    echo "Não é float (a)!: $a <br>"; // $a "False float"
    echo "$a";
    echo "<br>";
}


// Checando números decimais


if(is_float($b)) {
    echo "É float (b)!: $b <br>"; // $b "True float"
    echo "<br>";
}


