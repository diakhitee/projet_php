<?php
    // Démarrer la session
    session_start();

    // Détruire toutes les variables de session
    $_SESSION = array();

    // Détruire la session
    session_destroy();

    // Rediriger l'utilisateur vers la page de connexion
    header("location: log_in.php");
    exit();
?>