<?php
session_start();

$host = 'db';              // اسم السيرفيس بتاع MySQL في docker-compose
$dbname = 'grades';        // MYSQL_DATABASE
$username = 'user';        // MYSQL_USER
$password = 'user123';     // MYSQL_PASSWORD

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
