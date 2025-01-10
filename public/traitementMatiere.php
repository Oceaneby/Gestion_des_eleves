<?php

require_once '../classes/GestionNotes.php';
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
        die('Requête CSRF détectée.');
    }
    if (isset($_POST['nomMatiere']) && isset($_POST['codeMatiere'])){ 
        $nomMatiere = trim($_POST['nomMatiere']);
        $codeMatiere = trim($_POST['codeMatiere']);

        $matiere = new Matiere($nomMatiere, $codeMatiere);
        $gestionNotes = new GestionNotes();
        try{ 
            $gestionNotes->ajouterMatiere($matiere);
            
        } catch(Exception $e){
            die("Erreur lors de l'ajout de la matière : " . $e->getMessage());
        }
    } else{
        die('Les champs requis ne sont pas définis.');
    }  
    // header('Location: index.php');
    //  exit();
}
?>