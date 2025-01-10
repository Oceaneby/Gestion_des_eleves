<?php
require_once '../Includes/config.php';
require_once '../classes/GestionNotes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
        die('Requête CSRF détectée.');
    }
    
    $idEtudiant = $_POST['idEtudiant'];
    $idMatiere = $_POST['idMatiere'];
    $valeurNote = $_POST['valeurNote'];

    $gestionNotes = new GestionNotes();
    $gestionNotes->attribuerNote($idEtudiant, $idMatiere, $valeurNote);
}