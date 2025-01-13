<?php
require_once '../Includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="bg-gray-100 font-sans text-gray-900">
    <h1 class="text-3xl font-bold text-center text-orange-600 mb-8">Gestion des Élèves</h1>
    <h2 class="text-2xl font-semibold text-center text-blue-600 mb-6">Ajouter un Étudiant</h2>
    <div class="bg-white shadow-lg rounded-lg p-8">
        <form action="traitementEtudiant.php" method="POST" class="space-y-6">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'];?>">

            <label for="prenom" class="block text-lg font-medium text-gray-700">Prénom :</label>
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