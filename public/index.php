<?php

require_once '../classes/GestionNotes.php';
$gestionNotes = new GestionNotes();
$etudiants = $gestionNotes->listerEtudiants();
$matieres = $gestionNotes->listerMatieres();
$notes = $gestionNotes->listerNotes();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Notes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gestion des Notes</h1>
<!-- ************* SECTION ETUDIANTS *********************  -->
    <section>
        <h2>Liste des Étudiants</h2>
        <ul>
            <?php foreach ($etudiants as $etudiant) : ?>
                <li><?php echo $etudiant['nom'] . " " . $etudiant['prenom']; ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="ajoutEtudiant.php">Ajouter un étudiant</a>
    </section>
<!-- ********************* SECTION MATIERES *********************  -->
    <section>
        <h2>Liste des Matières</h2>
        <ul>
            <?php foreach ($matieres as $matiere) : ?>
                <li><?php echo $matiere['nomMatiere']; ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="ajoutMatiere.php">Ajouter une matière</a>
    </section>
<!-- ****************** SECTION NOTES *********************************  -->
    <section>
        <h2>Liste des Notes</h2>
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>Étudiant : <?php echo htmlspecialchars($note['nom']) . ' ' . htmlspecialchars($note['prenom']); ?> | Matière ID: <?php echo htmlspecialchars($note['nomMatiere']); ?> | Note: <?php echo $note['valeurNote']; ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="attribuerNote.php">Attribuer une note</a>
    </section>

</body>
</html>