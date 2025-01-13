<?php
Class Etudiant extends Personne
{
  
    private $matricule;
    private $id;

    public function __construct($nom, $prenom, $matricule)
    {
        parent::__construct($nom, $prenom);
        $this->setMatricule($matricule);
    }
    public function getId(){
        return $this->id;
    }
  

    public function getMatricule()
    {
        return $this->matricule;
    }
    public function setMatricule($matricule)
    {
        if (empty($matricule)) {
            throw new \Exception("Le matricule ne peut pas être vide");
        }
        $this->matricule = $matricule;
    }

};
// try{
//     $identite = new Etudiant("Dupont", "Jean", 246);
//     echo $identite->getNom();
// } catch (\Exception $e){
//     echo "Erreur : " . $e->getMessage(); 
// }
// try{
//     $identite = new Etudiant("Dupont", "Jean", 246);
//     echo $identite->getPrenom();
// } catch (\Exception $e){
//     echo "Erreur : " . $e->getMessage(); 
// }
// try{
//     $identite = new Etudiant("Dupont", "Jean", 246);
//     echo $identite->getMatricule();
// } catch (\Exception $e){
//     echo "Erreur : " . $e->getMessage(); 
// }
   
?>




