<?php
/*
*
* Veritabanı bağlantısı için
* gerekli bağlantı bilgilerinin
* bulunduğu ayar dosyası.
*
*/

header('Content-Type: text/html; Charset=UTF-8');
date_default_timezone_set('Europe/Istanbul');

define('MYSQL_HOST',	'localhost');
define('MYSQL_DB',		'webfitness');
define('MYSQL_USER',	'root');
define('MYSQL_PASS',	'');

include "./inc/db.php";
// Connecting database
try {
	$connect = new PDO("mysql:host=".MYSQL_HOST."; dbname=".MYSQL_DB, MYSQL_USER, MYSQL_PASS);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>