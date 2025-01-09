<?php
require_once 'GestionNotes.php';
$gestionNotes = new GestionNotes();

$etudiants = $gestionNotes->listerEtudiants();
$matieres = $gestionNotes->listerMatieres();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attribuer une Note</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Attribuer une Note</h1>

    <form action="../public/traitementNote.php" method="POST">
        <label for="idEtudiant">Étudiant:</label>
        <select name="idEtudiant" id="idEtudiant">
            <?php foreach ($etudiants as $etudiant) : ?>
                <option value="<?php echo $etudiant['id']; ?>"><?php echo $etudiant['nom'] . " " . $etudiant['prenom']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="idMatiere">Matière:</label>
        <select name="idMatiere" id="idMatiere">
            <?php foreach ($matieres as $matiere) : ?>
                <option value="<?php echo $matiere['id']; ?>"><?php echo $matiere['nomMatiere']; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="valeurNote">Note:</label>
        <input type="number" id="valeurNote" name="valeurNote" min="0" max="20"><br>

        <button type="submit">Attribuer la Note</button>
    </form>

    <a href="../public/index.php">Retour à l'accueil</a>
</body>
</html>