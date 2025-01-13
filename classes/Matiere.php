<?php

abstract Class Matiere{
    protected $id;
    protected $nomMatiere;
    protected $codeMatiere;
    protected $bareme;

    public function __construct($nomMatiere, $codeMatiere, $bareme)
    {
        $this->setNomMatiere($nomMatiere);
        $this->setCodeMatiere($codeMatiere);
        $this->bareme = $bareme;
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
    public function getBareme(){
        return $this->bareme;
    }
    abstract public function validerNote($valeurNote): bool;
    
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