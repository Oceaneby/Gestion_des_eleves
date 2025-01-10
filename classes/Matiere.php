<?php

Class Matiere{
    private $id;
    private $nomMatiere;
    private $codeMatiere;

    public function __construct($nomMatiere, $codeMatiere)
    {
        $this->setNomMatiere($nomMatiere);
        $this->setCodeMatiere($codeMatiere);
    }
    public function getId(){
        return $this->id;
    }
    public function getNomMatiere()
    {
        return $this->nomMatiere;
    }
    public function setNomMatiere($nomMatiere)
    {
        if (empty($nomMatiere)) {
            throw new \Exception("Le nom ne peut pas être vide");
        }
        $this->nomMatiere = $nomMatiere;
    }
    public function getCodeMatiere()
    {
        return $this->codeMatiere;
    }
    public function setCodeMatiere($codeMatiere)
    {
        if (empty($codeMatiere)) {
            throw new \Exception("Le nom ne peut pas être vide");
        }
        $this->codeMatiere = $codeMatiere;
    }
};

// try{
//     $classeMatiere = new Matiere("Math", "a60");
//     echo $classeMatiere->getNomMatiere();
// } catch (\Exception $e){
//     echo "Erreur : " . $e->getMessage(); 
// }
// try{
//     $classeMatiere = new Matiere("Math", "a80");
//     echo $classeMatiere->getCodeMatiere();
// } catch (\Exception $e){
//     echo "Erreur : " . $e->getMessage(); 
// }

   
?>