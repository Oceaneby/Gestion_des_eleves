<?php
require_once '../Includes/config.php';
require_once '../classes/GestionNotes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
        die('Requête CSRF détectée.');
    }
    if (isset($_POST['idEtudiant']) && isset($_POST['idMatiere']) && isset($_POST['valeurNote'])){
        $idEtudiant = $_POST['idEtudiant'];
        $idMatiere = $_POST['idMatiere'];
        $valeurNote = $_POST['valeurNote'];

        $gestionNotes = new GestionNotes();
        $gestionNotes->attribuerNote($idEtudiant, $idMatiere, $valeurNote);


        header('Location: index.php');
        exit();
    }else{
        die('Tous les champs requis ne sont pas définis.');
    }
}