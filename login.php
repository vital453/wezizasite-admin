<?php
session_start(); // On démarre la session
// Si l'utilisateur est déjà connecté, on le redirige vers le tableau de bord
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Administration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-wrapper">
        <h2>Administration - Connexion</h2>
        <form action="auth.php" method="post">
            <div class="form-group">
                <label>Identifiant</label>
                <input type="text" name="username" required>
            </div>    
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Connexion">
            </div>
        </form>
    </div>
</body>
</html>