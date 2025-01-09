<?php
session_start();
require_once '../classes/GestionNotes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nomMatiere = $_POST['nomMatiere'];
    $codeMatiere = $_POST['codeMatiere'];

    $gestionNotes = new GestionNotes();
    $gestionNotes->ajouterMatiere($nomMatiere, $codeMatiere);
}
?>