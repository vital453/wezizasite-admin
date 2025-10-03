<?php
// Fichier : db.php

$dbHost = '91.216.107.161';
$dbName = 'teamp2675619';
$dbUser = 'teamp2675619';
$dbPass = 'bsvymz2iyz';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}
?>