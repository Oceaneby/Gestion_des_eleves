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
        <form action="traitementMatiere.php" method="POST">
            <label for="nomMatiere">Nom matière :</label>
            <input type="text" id="nomMatiere" name="nomMatiere" placeholder="Entrez le nom de la matière">

            <label for="codeMatiere">Code matière :</label>
            <input type="text" id="codeMatiere" name="codeMatiere"  placeholder="Entrez le code de la matière">
            
            <button type="submit">Soumettre</button>
        </form>
    </div>
</body>

</html>