<?php
require_once '../Includes/config.php';
require_once '../classes/GestionNotes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
        die('Requête CSRF détectée.');
    }
    
    $nomMatiere = $_POST['nomMatiere'];
    $codeMatiere = $_POST['codeMatiere'];

    $gestionNotes = new GestionNotes();
    $gestionNotes->ajouterMatiere($nomMatiere, $codeMatiere);
}
?>