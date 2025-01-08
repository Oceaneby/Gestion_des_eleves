<?php
class GestionNotes
{
    private $pdo;


    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function ajouterEtudiant($nom, $prenom, $matricule)
    {
        try {

            $stmt = $this->pdo->prepare("INSERT INTO etudiants (nom, prenom, matricule) VALUES (:nom, :prenom, :matricule)");
            $stmt->execute([
                'nom' => $nom,
                'prenom' => $prenom,
                'matricule' => $matricule
            ]);
            echo "L'étudiant a été ajoué avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout de l'étudiant :" . $e->getMessage();
        }
    }
}
