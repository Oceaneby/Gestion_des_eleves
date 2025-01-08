<?php

Class Note {
   
    private $id;
    private $id_etudiant;
    private $id_matiere;
    private $valeurNote;

    
    public function __construct($valeurNote) {
        if (!is_numeric($valeurNote) || $valeurNote < 0 || $valeurNote > 20) {
            throw new \Exception("La valeur de la note doit être un nombre entre 0 et 20.");
        }
        $this->valeurNote = $valeurNote;
    }

   
    public function getId() {
        return $this->id;
    }

    public function getIdEtudiant() {
        return $this->id_etudiant;
    }
    public function setIdEtudiant($id_etudiant){
        if (!is_numeric($id_etudiant)) {
            throw new \Exception("L'ID de l'étudiant doit être un nombre.");
        }
        $this->id_etudiant = $id_etudiant;
    }

    public function getIdMatiere() {
        return $this->id_matiere;
    }
    public function setIdMatiere($id_matiere) {
        if (!is_numeric($id_matiere)) {
            throw new \Exception("L'ID de la matière doit être un nombre.");
        }
        $this->id_matiere = $id_matiere;
    }

    public function getValeurNote() {
        return $this->valeurNote;
    }

    public function setValeurNote($valeurNote) {
        if (!is_numeric($valeurNote) || $valeurNote < 0 || $valeurNote > 20) {
            throw new \Exception("La valeur de la note doit être un nombre entre 0 et 20.");
        }
        $this->valeurNote = $valeurNote;
    }
}
try {
    
    $note = new Note(15);  
    $note->setIdEtudiant(1);  
    $note->setIdMatiere(3);   

    
    echo "Note créée avec succès.";
    echo "ID Etudiant : " . $note->getIdEtudiant() . "\n";
    echo "ID Matière : " . $note->getIdMatiere() . "\n";
    echo "Valeur de la note : " . $note->getValeurNote() . "\n";

} catch (\Exception $e) {
    
    echo "Erreur : " . $e->getMessage() . "\n";
}

?>
