<?php
// Fichier : logout.php
session_start();
$_SESSION = array(); // On vide le tableau de session
session_destroy(); // On détruit la session
header("location: login.php"); // On redirige vers la page de connexion
exit;
?>