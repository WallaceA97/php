<?php

$json = '[{"nome":"Wallace","idade":21},{"nome":"Arthur","idade":22}]';

$data = json_decode($json, true);

var_dump($data);

?>