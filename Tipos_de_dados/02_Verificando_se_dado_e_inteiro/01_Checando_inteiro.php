<?php

if(is_int(5)) { // True = numero inteiro
    echo "É um inteiro <br>";
}

if(is_int("Não é um inteiro")) { // False = não é um numero inteiro
    echo "É um inteiro <br>";
}

$a = 10;

if(is_int($a)) { // True = numero inteiro
    echo "É um inteiro <br>";
}


if(is_int("Nao é inteiro")) { // False = não é um numero inteiro
    echo "Não é inteiro <br>";
}

$b = 4;

if(is_int($b)) { // False = não é um numero inteiro
    echo "Não é inteiro <br>";
}

echo"<br>";
echo"É um numero inteiro: $a <br>"; 
echo"Não é um numero inteiro: $b <br>";