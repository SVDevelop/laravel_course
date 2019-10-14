<?php 

include "libs/rb-mysql.php";
$dbConnect = R::setup('mysql:host=' .DB_HOST. ';port='.DB_PORT.';dbname=' .DB_NAME, DB_USER, DB_PASS);

if ($dbConnect = false) {
	die("Ошибка подключения к базе данных.");
}

// R::freeze(TRUE);

?>