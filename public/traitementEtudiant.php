<?php


require_once '../classes/GestionNotes.php';
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
        die('Requête CSRF détectée.');
    }
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['matricule'])){ 
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $matricule = trim($_POST['matricule']);

        $etudiant = new Etudiant($nom, $prenom, $matricule);

        $gestionNotes = new GestionNotes();
        try{ 
        $gestionNotes->ajouterEtudiant($etudiant);

        header('Location: accueil.php');
        exit();
        }catch(Exception $e){
            die("Erreur lors que l'ajout de l'étudiant : " . $e->getMessage());
        }
    }else{
        die('Tous les champs requis ne sont pas définis.');
    }
}