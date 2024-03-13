<?php
// Check if the delete form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $id_utilisateur_a_supprimer = $_POST['delete_id'];

    // Use a prepared statement to avoid SQL injection
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
    $stmt->bindParam(':id', $id_a_supprimer, PDO::PARAM_INT);

    // Execute the query
    if ($stmt->execute()) {
        echo "Utilisateur supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression de l'utilisateur.";
    }
}
?>