<?php

require_once '../Includes/config.php';
require_once '../classes/GestionNotes.php';
$gestionNotes = new GestionNotes();
$etudiants = $gestionNotes->listerEtudiants();
$matieres = $gestionNotes->listerMatieres();
$notes = $gestionNotes->listerNotes();
// echo '<pre>';
// var_dump($gestionNotes);
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
    <h1>Gestion des Élèves</h1>
<!-- ************* SECTION ETUDIANTS *********************  -->
    <section>
        <h2>Liste des Étudiants</h2>
        <ul>
            <?php foreach ($etudiants as $etudiant) :
                $moyenne = $gestionNotes->calculerMoyenneEtudiant($etudiant['id']); ?>
                <li>
                    <?php echo htmlspecialchars($etudiant['nom']) . " " . htmlspecialchars($etudiant['prenom']); ?>
                    - Moyenne : <?php echo number_format($moyenne, 2); ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="../classes/ajoutEtudiant.php">Ajouter un étudiant</a>
    </section>
<!-- ********************* SECTION MATIERES *********************  -->
    <section>
        <h2>Liste des Matières</h2>
        <ul>
            <?php foreach ($matieres as $matiere) : ?>
                <li><?php echo htmlspecialchars($matiere['nomMatiere']); ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="../classes/ajoutMatiere.php">Ajouter une matière</a>
    </section>
<!-- ****************** SECTION NOTES *********************************  -->
    <section>
        <h2>Liste des Notes</h2>
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>Étudiant : <?php echo htmlspecialchars($note['nom']) . ' ' . htmlspecialchars($note['prenom']); ?> | Matière : <?php echo htmlspecialchars($note['nomMatiere']); ?> | Note: <?php echo htmlspecialchars($note['valeurNote']); ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="../classes/attribuerNote.php">Attribuer une note</a>
    </section>

</body>
</html>