<?php

ini_set('display_errors', 1);


define (DB_USER, "root");
define (DB_PASSWORD, "password");
define (DB_DATABASE, "mydatabase");
define (DB_HOST, "localhost");


$mysqli = new mysqli($user, $password, $db, $host);
?>