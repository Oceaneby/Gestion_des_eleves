<?php

Class Matiere{
    private $id;
    private $nomMatiere;
    private $codeMatiere;

    public function __construct($nomMatiere, $codeMatiere)
    {
        $this->getNomMatiere($nomMatiere);
        $this->getCodeMatiere($codeMatiere);
    }
    public function getId(){
        return $this->id;
    }
    public function getNomMatiere()
    {
        return $this->nomMatiere;
    }
    public function getCodeMatiere()
    {
        return $this->codeMatiere;
    }
};

try{
    $classeMatiere = new Matiere("Math", "a60");
    echo $classeMatiere->getNomMatiere();
} catch (\Exception $e){
    echo "Erreur : " . $e->getMessage(); 
}
try{
    $classeMatiere = new Matiere("Math", "a80");
    echo $classeMatiere->getCodeMatiere();
} catch (\Exception $e){
    echo "Erreur : " . $e->getMessage(); 
}

   
?>