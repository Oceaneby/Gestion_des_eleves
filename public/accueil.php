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
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="bg-gray-100 font-sans text-gray-900">
    <main class="max-w-7xl mx-auto py-12 px-4 md:px-12">
        <h1 class=" mb-12 text-center text-3xl md:text-4xl font-bold leading-tight text-orange-500">Gestion des Élèves</h1>
        <!-- ************* SECTION ETUDIANTS *********************  -->
        <section class=" bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class=" text-center text-2xl font-semibold text-pink-700 mb-4">Liste des Étudiants</h2>
            <ul class="space-y-2">
                <?php foreach ($etudiants as $etudiant) :
                    $moyenne = $gestionNotes->calculerMoyenneEtudiant($etudiant['id']); ?>
                    <li class="p-2 bg-gray-50 border rounded-lg">
                        <?php echo htmlspecialchars($etudiant['nom']) . " " . htmlspecialchars($etudiant['prenom']); ?>
                        - Moyenne : <?php echo number_format($moyenne, 2); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a href="../public/ajoutEtudiant.php" class="block mt-4 text-center text-blue-500 hover:underline">Ajouter un étudiant</a>
        </section>
        <!-- ********************* SECTION MATIERES *********************  -->
        <section class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class=" text-center text-2xl font-semibold text-pink-700 mb-4">Liste des Matières</h2>
            <ul class="space-y-2">
                <?php foreach ($matieres as $matiere) : ?>
                    <li class="p-2 bg-gray-50 border rounded-lg"><?php echo htmlspecialchars($matiere['nomMatiere']); ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="../public/ajoutMatiere.php" class="block mt-4 text-center text-blue-500 hover:underline">Ajouter une matière</a>
        </section>
        <!-- ****************** SECTION NOTES *********************************  -->
        <section class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class=" text-center text-2xl font-semibold text-pink-700 mb-4">Liste des Notes</h2>
            <ul class="space-y-2">
                <?php foreach ($notes as $note) : ?>
                    <li class="p-2 bg-gray-50 border rounded-lg">Étudiant : <?php echo htmlspecialchars($note['nom']) . ' ' . htmlspecialchars($note['prenom']); ?> | Matière : <?php echo htmlspecialchars($note['nomMatiere']); ?> | Note: <?php echo htmlspecialchars($note['valeurNote']); ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="../public/attribuerNote.php" class="block mt-4 text-center text-blue-500 hover:underline">Attribuer une note</a>
        </section>
    </main>
</body>

</html>