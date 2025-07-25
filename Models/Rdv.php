<?php
class RendezVous {
    protected $id;
    protected $specialite;
    protected $dateDemande;
    protected $etat;

    public function __construct($id, $specialite, $dateDemande, $etat) {
        $this->id = $id;
        $this->specialite = $specialite;
        $this->dateDemande = $dateDemande;
        $this->etat = $etat;
    }

    public function getId() { 
        return $this->id;
     }
    public function getSpecialite() { 
        return $this->specialite;
     }
    public function getDateDemande() { 
        return $this->dateDemande;
     }
    public function getEtat() { 
        return $this->etat;
     }
}
