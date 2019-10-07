<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Wallace Arthur");
$cad->setEmail("wallace.santos@webjump.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

?>