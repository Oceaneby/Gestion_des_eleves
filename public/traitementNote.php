<?php

require_once '../classes/GestionNotes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $idEtudiant = $_POST['idEtudiant'];
    $idMatiere = $_POST['idMatiere'];
    $valeurNote = $_POST['valeurNote'];

    $gestionNotes = new GestionNotes();
    $gestionNotes->attribuerNote($idEtudiant, $idMatiere, $valeurNote);
}