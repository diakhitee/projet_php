<?php
// Vérifier si l'utilisateur est connecté
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: log_in.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="assets/welcome.css">


</head>
<body>
    <h1>Bienvenue, <?php echo $_SESSION['login']; ?> !</h1>
    <p>Merci de vous être connecté.</p>
        <a href="logout.php">Déconnexion</a>
</body>
</html>
