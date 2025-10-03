<?php
// Fichier : index.php
// Ce fichier agit comme un routeur d'entrée pour l'administration.

session_start();

// Vérifie si l'utilisateur est déjà connecté et le redirige
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: dashboard.php");
    exit;
} else {
    header("location: login.php");
    exit;
}
?>