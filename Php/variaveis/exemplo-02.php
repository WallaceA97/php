<?php
	// Comentário de linha
	/*
	comentário de bloco
	
	
	$anoNascimento	= 1997;
	*/
	$nome1	= "Wallace ";
	$sobrenome = "Arthur";
	$nomeCompleto = $nome1 . $sobrenome; //concatenação

	echo $nomeCompleto;

	exit;

	echo $nome1;

	echo "<br/>";

	unset($nome1);

	if (isset($nome1)){
	echo $nome1;

	}
	


?>