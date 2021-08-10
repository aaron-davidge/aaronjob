<?php


define (DB_USER, "root");
define (DB_PASSWORD, "password");
define (DB_DATABASE, "PortfolioDB");
define (DB_HOST, "localhost");


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
?>