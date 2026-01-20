<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'school_db';

try {
    $pdo = new PDO(
        "mysql:host=$host;charset=utf8",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
    
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$db`");
    
    $pdo->exec("USE `$db`");
    
    $sql = "CREATE TABLE IF NOT EXISTS employees (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        title VARCHAR(100),
        skills TEXT
    )";
    
    $pdo->exec($sql);
    
} catch (PDOException $e) {
    die("Error: " . $e->getMessage() . "\n");
}
