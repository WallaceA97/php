<?php

function ola(){

$argumentos = func_get_args(); //recupera todos os argumentos que forem passados pela função
	
return $argumentos;

}

var_dump (ola("Bom dia ",10))

?>