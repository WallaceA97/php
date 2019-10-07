<?php

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeValor = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
	
	echo "Criança";

} else if ($qualASuaIdade < $idadeValor){

	echo "Adolescente";

} else if ($qualASuaIdade < $idadeMelhor){

	echo "Adulto";

} else { 

	echo"Idoso";

}

echo "<br>";

echo ($qualASuaIdade < $idadeValor)? "Menor de Idade":"Maior de Idade";

?>