<?php

function ola($texto, $periodo = "Bom dia "){


	return "Olá $texto! $periodo!<br>";
}

echo ola ("Mundo");
echo ola ("","Boa Noite");
echo ola ("Wallace","Boa Tarde");
echo ola ("Arthur","");

?>