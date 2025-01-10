<?php

require_once '../Includes/Database.php';
class GestionNotes
{
    private $pdo;


    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function ajouterEtudiant($nom, $prenom, $matricule)
    {
        if (empty($nom) || empty($prenom) || empty($matricule)) {
            echo "Erreur : Tous les champs sont requis.";
            return;
        }

        try {

            $stmt = $this->pdo->prepare("INSERT INTO etudiants (nom, prenom, matricule) VALUES (:nom, :prenom, :matricule)");
            $stmt->execute([
                'nom' => $nom,
                'prenom' => $prenom,
                'matricule' => $matricule
            ]);
            echo "L'étudiant a été ajoué avec succès.";
        } catch (Exception $e) {
            echo "Erreur lors de l'ajout de l'étudiant :" . $e->getMessage();
        }
    }
    public function ajouterMatiere($nomMatiere, $codeMatiere)
    {
        if (empty($nomMatiere) || empty($codeMatiere)) {
            echo "Erreur : Tous les champs sont requis.";
            return;
        }

        try {

            $stmt = $this->pdo->prepare("INSERT INTO matieres (nomMatiere, codeMatiere) VALUES (:nomMatiere, :codeMatiere)");
            $stmt->execute([
                'nomMatiere' => $nomMatiere,
                'codeMatiere' => $codeMatiere
            ]);
            echo "La matière est ajouter avec succès";
        } catch (Exception $e) {
            echo "Erreur lors de l'ajout de la matière :" . $e->getMessage();
        }
    }

    public function attribuerNote($idEtudiant, $idMatiere, $valeurNote)
    {
        
        if ($valeurNote < 0 || $valeurNote > 20) {
            echo "Erreur : la note doit être entre 0 et 20";
            return;
        }
        try {

            $stmt = $this->pdo->prepare("INSERT INTO notes (id_etudiant, id_matiere, valeurNote) VALUES (?, ?, ?)");
            $stmt->execute([
                $idEtudiant,
                $idMatiere,
                $valeurNote
            ]);
            echo "La note est ajouter avec succès.";
        } catch (Exception $e) {
            echo "Erreur lors de l'attribution de la note :" . $e->getMessage();
        }
    }

    public function calculerMoyenneEtudiant($idEtudiant){

        try{ 
        $stmt = $this->pdo->prepare("SELECT AVG(valeurNote) AS moyenne FROM notes WHERE id_etudiant = ?");
        $stmt->execute([
            $idEtudiant
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ['moyenne'] ?? 0;
    }catch (Exception $e){
        echo "Erreur du calcule de la moyenne :" .$e->getMessage();
        return 0;
    }
    }
    
    public function listerEtudiants(){
        $stmt = $this->pdo->prepare("SELECT * FROM etudiants ORDER BY nom ASC, prenom ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function listerMatieres(){
        $stmt = $this->pdo->prepare("SELECT * FROM matieres ORDER BY nomMatiere ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function listerNotes(){
        $stmt = $this->pdo->prepare("SELECT
         notes.id,
         etudiants.nom,
         etudiants.prenom,
         matieres.nomMatiere,
         notes.valeurNote
          FROM notes
          JOIN etudiants ON notes.id_etudiant = etudiants.id
          JOIN matieres ON notes.id_matiere = matieres.id
          ORDER BY etudiants.nom ASC, matieres.nomMatiere ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
