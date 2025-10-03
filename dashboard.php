<?php
// Fichier : dashboard.php
session_start();

// On vérifie si l'utilisateur est connecté, sinon on le redirige vers la page de connexion
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// On inclut notre fichier de connexion à la BDD
require_once "db.php";

// On récupère toutes les demandes, les plus récentes en premier
$sql = "SELECT * FROM demandes ORDER BY date_soumission DESC";
$demandes = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Tableau de Bord - Demandes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="dashboard-wrapper">
        <header>
            <h1>Demandes de Contact</h1>
            <a href="logout.php">Se déconnecter</a>
        </header>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Entreprise</th>
                        <th>Action</th>
                        <th>Besoin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($demandes as $demande): ?>
                        <tr>
                            <td><?php echo htmlspecialchars(date("d/m/Y H:i", strtotime($demande['date_soumission']))); ?></td>
                            <td><?php echo htmlspecialchars($demande['prenom'] . ' ' . $demande['nom']); ?></td>
                            <td><?php echo htmlspecialchars($demande['email']); ?></td>
                            <td><?php echo htmlspecialchars($demande['telephone']); ?></td>
                            <td><?php echo htmlspecialchars($demande['entreprise']); ?></td>
                            <td><?php echo htmlspecialchars($demande['action_souhaitee']); ?></td>
                            <td><?php echo nl2br(htmlspecialchars($demande['besoin'])); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>