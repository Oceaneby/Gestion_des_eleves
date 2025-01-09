<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Gestion des Élèves</h1>
    <h2>Ajouter une Matière</h2>
    <div>
        <form action="../public/traitementMatiere.php" method="POST">
            <label for="nomMatiere">Nom matière :</label>
            <input type="text" id="nomMatiere" name="nomMatiere" placeholder="Entrez le nom de la matière">

            <label for="codeMatiere">Code matière :</label>
            <input type="text" id="codeMatiere" name="codeMatiere"  placeholder="Entrez le code de la matière">
            
            <button type="submit">Ajouter la Matière</button>
        </form>
        <a href="../public/index.php">Retour à l'accueil</a>
    </div>
</body>

</html>