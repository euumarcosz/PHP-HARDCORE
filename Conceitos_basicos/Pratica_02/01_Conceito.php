<?php

//Nome 
$nome = "Bruce";

//Sobrenome
$sobrenome = " Wayne";

//Data de nascimento 
$dataNascimento = "1972-02-19";

//Idade
$idade = date("Y") - date("Y", strtotime($dataNascimento)); //Calculador de idade

//Nome do pai
$nomedopai = "Thomas";

//Nome da mãe
$nomedamae = "Martha Wayne";

 echo"Nome " . "Sobrenome: " . $nome .$sobrenome. "<br>";
 echo"Data de nascimento: " . $dataNascimento. "<br>";
 echo"Idade: " . $idade. "<br>";
 echo"Nome do pai: " . $nomedopai. "<br>";
 echo"Nome da mãe: " . $nomedamae. "<br>";

 ?>