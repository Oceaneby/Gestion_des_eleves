<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Gestion des Élèves</h1>
    <div>
        <form action="traitementEtudiant.php" method="POST">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez le prénom">

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom"  placeholder="Entrez le nom">

            <label for="matricule">Matricule :</label>
            <input type="text" id="matricule" name="matricule" placeholder="Entrez le matricule">

            <button type="submit">Soumettre</button>
        </form>
    </div>
</body>

</html>