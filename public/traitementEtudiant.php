<?php

require_once '../Includes/config.php';
require_once '../classes/GestionNotes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
        die('Requête CSRF détectée.');
    }

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];

    $gestionNotes = new GestionNotes();
    $gestionNotes->ajouterEtudiant($nom, $prenom, $matricule);
}