<?php
$host = 'localhost';
$database = 'escaperoom';
$user = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$database;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $connect = new PDO($dsn, $user, $password, $opt);
} catch (PDOException $e) {
    echo $e->getMessage();
    die("Sorry, er is een probleem met de verbinding met de database.");
}
