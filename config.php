<?php

// Database connection parameters
$host = 'localhost';
$db = 'u391328125_api_soul'; // Your database name
$user = 'u391328125_api_soul'; // Your database username
$pass = '+Z]i$2qZUZ7d'; // Your database password
$charset = 'utf8mb4';

// Set up the DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $pass);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection errors
    die('Connection failed: ' . $e->getMessage());
}