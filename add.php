<?php
session_start(); // Démarre la session
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $type_demande = $_POST['type_demande'];
    $commentaire = $_POST['commentaire'];

    try {
        $sql = "INSERT INTO utilisateur (nom, prenom, email, type, commentaire) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nom, $prenom, $email, $type_demande, $commentaire]);

        $_SESSION['message'] = "Formulaire soumis avec succès !"; // Message de succès
        $_SESSION['message_type'] = "success"; // Type de message
    } catch (Exception $e) {
        $_SESSION['message'] = "Erreur lors de l'envoi du formulaire."; // Message d'erreur
        $_SESSION['message_type'] = "danger"; // Type d'erreur (rouge)
    }

    header('Location: index.php'); // Redirige vers index.html
    exit;
}
?>
