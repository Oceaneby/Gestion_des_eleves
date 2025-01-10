<?php
require_once '../Includes/config.php';

require_once '../classes/GestionNotes.php';
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
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <h1>Attribuer une Note</h1>

    <form action="../public/traitementNote.php" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'];?>">
    
        <label for="idEtudiant">Étudiant:</label>
        <select name="idEtudiant" id="idEtudiant">
            <?php foreach ($etudiants as $etudiant) : ?>
                <option value="<?php echo htmlspecialchars($etudiant['id']); ?>"><?php echo htmlspecialchars($etudiant['nom']) . " " . htmlspecialchars($etudiant['prenom']); ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="idMatiere">Matière:</label>
        <select name="idMatiere" id="idMatiere">
            <?php foreach ($matieres as $matiere) : ?>
                <option value="<?php echo htmlspecialchars($matiere['id']); ?>"><?php echo htmlspecialchars($matiere['nomMatiere']); ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="valeurNote">Note:</label>
        <input type="number" id="valeurNote" name="valeurNote"><br>

        <button type="submit">Attribuer la Note</button>
    </form>

    <a href="../public/index.php">Retour à l'accueil</a>
</body>
</html>