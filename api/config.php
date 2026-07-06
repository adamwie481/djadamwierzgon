<?php

$host = "sql4.5v.pl";
$db   = "db-user51705";
$user = "db-user51705";
$pass = "wieszkon1997";

$pdo = new PDO(
    "mysql:host=$host;dbname=$db;charset=utf8mb4",
    $user,
    $pass,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);
