<?php
session_start();

$host = 'db';                  // service name in docker-compose
$dbname = 'student_grades';    // MYSQL_DATABASE
$username = 'student';         // MYSQL_USER
$password = 'student123';      // MYSQL_PASSWORD

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    error_log("DB connection failed: " . $e->getMessage());
    die("Database connection error.");
}
