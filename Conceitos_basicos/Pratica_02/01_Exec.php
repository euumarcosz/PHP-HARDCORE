<?php

//Nome
$nome = "Bruce";

//Sobrenome
$sobrenome = "Wayne";

//Data de nascimento
$dataNascimento = "1972-02-19";

//Idade
$idade = date("Y") - date("Y", strtotime($dataNascimento));

//Nome do pai
$nomedopai = "Thomas";

//Nome da mãe
$nomedamae = "Martha Wayne";

 echo $nome . " " . $sobrenome . " " . $dataNascimento . " " . $idade . "<br>";
 echo $nomedopai . " " . $nomedamae . "<br>";

 ?>