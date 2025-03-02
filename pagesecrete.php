<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Secrète</title>
    <link rel="stylesheet" href="pagesecrete.css"> 
</head>
<body>
    <h1>Voici la liste des emails</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Type de demande</th>
                <th>Commentaire</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Inclure le fichier de connexion à la base de données
            include 'db.php';

            // Récupérer les e-mails de la table emails
            $result = $pdo->query("SELECT * FROM utilisateur");

            // Afficher les e-mails dans le tableau
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['nom']}</td>";
                echo "<td>{$row['prenom']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['type']}</td>";
                echo "<td>{$row['commentaire']}</td>";
                // bouton de suppression
                echo "<td>
                        <form method='post' action='delete.php'>
                          <input type='hidden' name='id' value='{$row['id']}'>
                          <button type='submit' value='Supprimer'>supprimer</button>
                        </form>
                        </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
