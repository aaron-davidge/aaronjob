<?php

ini_set('display_errors', 1);


$user = define (DB_USER, "root");
$password = define (DB_PASSWORD, "password");
$db = define (DB_DATABASE, "mydatabase");
$host = define (DB_HOST, "localhost");


$mysqli = new mysqli($user, $password, $db, $host);
?>