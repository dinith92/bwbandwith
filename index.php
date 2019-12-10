<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = 'mysql:dbname=test;host=127.0.0.1';

try {
    $pdo = new PDO($dsn, 'root', '123');
} catch (PDOException $e) {
    die($e->getMessage());
}