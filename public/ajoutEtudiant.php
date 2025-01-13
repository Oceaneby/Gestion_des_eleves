<?php
require_once '../Includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>
    <h1>Gestion des Élèves</h1>
    <h2>Ajouter un Étudiant</h2>
    <div>
        <form action="traitementEtudiant.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'];?>">

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez le prénom">

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom"  placeholder="Entrez le nom">

            <label for="matricule">Matricule :</label>
            <input type="text" id="matricule" name="matricule" placeholder="Entrez le matricule">

            <button type="submit">Ajouter l'Étudiant</button>
        </form>
        <a href="../public/accueil.php">Retour à l'accueil</a>
    </div>
</body>

</html>