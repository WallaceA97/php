<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root","clashroyale");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");
$login = "wallace";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido com Sucesso!";

?>