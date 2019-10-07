<?php

class Pessoa{  //Classe
 
	public $nome; //Atributo

	public function falar(){ //Método

		return " O meu nome é ".$this->nome;

	}

}

$wallace = new Pessoa();
$wallace->nome = "Wallace Arthur";
echo $wallace->falar();


?>