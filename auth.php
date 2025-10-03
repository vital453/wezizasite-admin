<?php
// Fichier : auth.php
session_start();

// --- VOS IDENTIFIANTS (à modifier) ---
define('ADMIN_USERNAME', 'admin'); 
define('ADMIN_PASSWORD', 'fF3@auCmwgbgwWj!'); // <-- CHANGEZ CECI !

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérification des identifiants
    if ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
        // Le mot de passe est correct, on ouvre la session
        $_SESSION["loggedin"] = true;
        
        // On redirige vers le tableau de bord
        header("location: dashboard.php");
    } else {
        // Identifiants incorrects, on retourne à la page de connexion
        header("location: login.php");
    }
} else {
    header("location: login.php");
}
?>