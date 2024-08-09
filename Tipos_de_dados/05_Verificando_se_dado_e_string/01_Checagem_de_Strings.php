<?php
// Inicializando as variáveis
$str = "Batman";
$num = 25;

// Verificando e exibindo se $str é uma string 
if (is_string($str)) {
    echo "$str é uma string 1<br>";
}

// Verificando e exibindo se $num é uma string
if (is_string($num)) {
    echo "$num é uma string 2<br>";
}

// Verificando novamente se $str é uma string
if (is_string($str)) {
    echo "É uma string 3<br>";
}
