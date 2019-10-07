<?php

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Wallace',
	'idade'=>21

));

array_push($pessoas, array(
	'nome'=>'Arthur',
	'idade'=>22
));

echo json_encode($pessoas);

?>