<?php

session_id("tl1r2oip6me7qglua43e0098k3");

require_once ("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>