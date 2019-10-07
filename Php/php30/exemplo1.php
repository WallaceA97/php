<?php

class Produto{

	private $descrição;
	private $preco;

	public function getDetalhes(){

		return "O produto {$this->descricao} custa {$this->preco} reais";
	
	}

	public function setDescricao($valor){
		$this->descricao = $valor;

	}

	public function setPreco($valor){
		$this->preco = $valor;

	}

	public function getDescricao(){

		return $this->descricao;

	}

}

$p1 = new Produto;
$p1->descricao = 'Livro';
$p1->preco = 50;

//var_dump($p1);
echo $p1->getDetalhes();

?>