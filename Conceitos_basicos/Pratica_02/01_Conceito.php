<?php

//Nome 
 echo"Nome ". "Sobrenome: ";
$nome = "Bruce";

//Sobrenome
$sobrenome = "Wayne";

echo $nome. " ". $sobrenome . "<br>";

//Data de nascimento 
 echo"Data de nascimento: ";
$dataNascimento = "1972-02-19";

echo $dataNascimento. "<br>";

//Idade
 echo"Idade: ";
$idade = date("Y") - date("Y", strtotime($dataNascimento)); //Calculador de idade

echo $idade. "<br>";

//Nome do pai
 echo"Nome do pai: ";
$nomedopai = "Thomas";

echo $nomedopai. "<br>";

//Nome da mãe
 echo"Nome da mãe: ";
$nomedamae = "Martha Wayne";

 echo $nomedamae . "<br>";