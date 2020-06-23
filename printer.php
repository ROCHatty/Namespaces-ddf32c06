<?php

include_once "database/Manager.class.php";
include_once "frontend/Manager.class.php";

$a = new database\Manager();
$b = new frontend\Manager();

$a -> spreek();
$b -> spreek();

?>