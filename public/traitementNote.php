<?php

require_once '../classes/GestionNotes.php';
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
        die('Requête CSRF détectée.');
    }
    if (isset($_POST['idEtudiant']) && isset($_POST['idMatiere']) && isset($_POST['valeurNote'])){
        $idEtudiant = $_POST['idEtudiant'];
        $idMatiere = $_POST['idMatiere'];
        $valeurNote = $_POST['valeurNote'];

        $note = new Note($idEtudiant, $idMatiere, $valeurNote);
        $gestionNotes = new GestionNotes();
        try{ 
        $gestionNotes->attribuerNote($note);
            
        // header('Location: accueil.php');
        // exit();
        }catch(Exception $e){
            die("Erreur lors de l'attribution de la note : " . $e->getMessage());
        }
    }else{
        die('Tous les champs requis ne sont pas définis.');
    }
}