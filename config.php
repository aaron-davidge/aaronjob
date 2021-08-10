<?php

ini_set('display_errors', 1);


define (DB_USER, "root");
define (DB_PASSWORD, "password");
define (DB_DATABASE, "testdatabase");
define (DB_HOST, "localhost");


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
?>




