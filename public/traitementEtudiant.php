<?php
session_start();
require_once '../classes/GestionNotes.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];

    $gestionNotes = new GestionNotes();
    $gestionNotes->ajouterEtudiant($nom, $prenom, $matricule);
}