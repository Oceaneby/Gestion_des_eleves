<?php
Class MatiereSur10 extends Matiere{
    private $noteSur10;



    public function __construct($nomMatiere, $codeMatiere, $noteSur10) 
    {
        parent::__construct($nomMatiere, $codeMatiere);
        $this->setNoteSur10($noteSur10);
       
    } 
    public function getNoteSur10()
    {
        return $this->noteSur10;
    }
    public function setNotesur10($noteSur10){
        if ($noteSur10 < 0 || $noteSur10 > 10) {
            throw new \Exception("La note sur 10 doit être entre 0 et 10.");
        }
        $this->noteSur10 = $noteSur10;
    }
    public function afficherNote(){
        parent::afficherNote();
        
    }
}
