<?php

$nome = "Wallace";

function teste()	{

	global $nome;
	echo $nome;

}

function teste2() {

	$nome = "Arthur";
	echo $nome."agora no teste2";

}

teste();
teste2();

?>