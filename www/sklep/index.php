<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=sklep','root','');

$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo -> exec("SET NAMES 'utf8'");

?>