<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root","clashroyale");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 4;


$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado com Sucesso!";

?>