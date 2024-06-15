<?php
// Primeira maneira de checar números inteiros
// Numeros inteiros 

 echo"NÚMEROS INTEIROS <br/";

if(is_int(10)) { // True = número inteiro
    echo"É um inteiro teste <br>";
    echo "<br>";
}

// Segunda maneira de checar números não inteiros
// Número não inteiros
if(is_int("Não é um inteiro")) { // False = não é um numero inteiro
    echo "Nao inteiro <br>";
}

// Segunda maneira de checar números inteiros
// Número inteiros
$a = 10;
$b = 20;
$c = 30;
$d = 40;

if(is_int($a)) { // True = Número inteiro
    echo"É um inteiro: A)  $a <br>";
}

if(is_int($b)) { // True = Número inteiro
    echo"É um inteiro: B)  $b <br>";
}

if(is_int($c)) { // True = Número inteiro
    echo"É um inteiro: C) $c <br>";
}

if(is_int($d)) { // True = Número inteiro
    echo"É um inteiro: D)  $d <br>";
}

echo "<br>";
echo "Números inteiros: $a, $b, $c, $d <br>";
echo "<br>";

// Segunda maneira de checar numeros não inteiros
// Numeros não inteiros
 echo "NÚMETOS NÃO INTEIROS <br>";
 echo "<br>";

$e = 50.05;
$f = 60.06;
$g = 70.07;
$h = 80.08;

if(is_int($e)) echo"Não é inteiro"; { // False = não é um número inteiro
    echo"Não é inteiro: E) $e <br>";
}

if(is_int($f)) echo"Não é inteiro"; { // False = não é um número inteiro
    echo"Não é inteiro: F) $f <br>";
}

if(is_int($g)) echo"Não é inteiro";  { // False = não é um número inteiro
    echo"Não é inteiro: G) $g <br>";
}

if(is_int($h)) echo"Não é inteiro"; { // False = não é um número inteiro
    echo"Não é inteiro: H) $h <br>";
}

echo "<br>";
echo "Número não inteiro: $e, $f, $g, $h <br>";
