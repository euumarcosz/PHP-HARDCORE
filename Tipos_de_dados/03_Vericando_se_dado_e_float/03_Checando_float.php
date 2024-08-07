<?php
// Checando se um número é float
echo "NÚMERO FLOAT <br>";

$valorFloat = 1.23; // Número float

if (is_float($valorFloat)) {
    echo "É um float <br>";
} else {
    echo "Não é um float <br>";
}

echo "<br>";

// Checando se um número não é float
echo "NÃO É FLOAT <br>";

$valorNaoFloat = "Não é um float"; // Número não é float

if (!is_float($valorNaoFloat)) {
    echo "Não é um float <br>";
}

echo "<br>";

// Checando valores que não são float
echo "NÃO É FLOAT <br>";
echo "<br>";

$a = "Test01";
$b = "Test02";
$c = "Test03";
$d = "Test04";

if (!is_float($a)) { // Verifica se não é um número float
    echo "$a: não é um float <br>";
}

if (!is_float($b)) {
    echo "$b: não é um float <br>";
}

if (!is_float($c)) {
    echo "$c: não é um float <br>";
}

if (!is_float($d)) {
    echo "$d: não é um float <br>";
}

echo "<br>";
echo "Não é Float: |$a| |$b| |$c| |$d| <br>";
echo "<br>";

// Checando se números são float
echo "É FLOAT <br>";
echo "<br>";

$e = 1234.56;
$f = 5678.90;
$g = 9101.11;
$h = 1213.14;

if (is_float($e)) {
    echo "$e: é um float <br>";
}

if (is_float($f)) {
    echo "$f: é um float <br>";
}

if (is_float($g)) {
    echo "$g: é um float <br>";
}

if (is_float($h)) {
    echo "$h: é um float <br>";
}

echo "<br>";
echo "São Floats: |$e| |$f| |$g| |$h| <br>";
?>
