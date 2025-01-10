<?php

require_once '../Includes/config.php';
require_once '../classes/GestionNotes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
        die('Requête CSRF détectée.');
    }
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['matricule'])){ 
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $matricule = trim($_POST['matricule']);

        if (empty($nom) || empty($prenom) || empty($matricule)) {
            die('Tous les champs doivent être remplis.');
        }

        $gestionNotes = new GestionNotes();
        $gestionNotes->ajouterEtudiant($nom, $prenom, $matricule);

        header('Location: index.php');
        exit();
    }else{
        die('Tous les champs requis ne sont pas définis.');
    }
}