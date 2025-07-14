<?php
$dsn = 'mysql:host=localhost;port=8889;dbname=users;charset=utf8';
$user = 'root';
$pass = 'root';
$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>