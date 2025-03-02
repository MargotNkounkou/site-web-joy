<?php
// Inclure le fichier de connexion à la base de données
include 'db.php';

// Vérifier si un ID est passé en paramètre
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Supprimer l'e-mail de la table emails
    $stmt = $pdo->prepare("DELETE FROM utilisateur WHERE id = ?");
    $stmt->execute([$id]);
}
// Rediriger vers la page secrète
header("Location: pagesecrete.php");
exit();
?>
