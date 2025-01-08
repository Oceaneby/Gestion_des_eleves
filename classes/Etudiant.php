<?php
Class Etudiant
{
    private $nom;
    private $prenom;
    private $matricule;
    private $id;

    public function __construct($nom, $prenom, $matricule)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMatricule($matricule);
    }
    public function getId(){
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        if (empty($nom)) {
            throw new \Exception("Le nom ne peut pas être vide");
        }
        $this->nom = $nom;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        if (empty($prenom)) {
            throw new \Exception("Le prénom ne peut pas être vide");
        }
        $this->prenom = $prenom;
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




