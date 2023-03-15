<?php

session_id('uu0g4fvn8ur53mvfpfo7vcle3p');

require_once("config.php");

session_regenerate_id();

echo session_id();


var_dump($_SESSION);

?>