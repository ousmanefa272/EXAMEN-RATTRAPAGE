<?php
require_once 'model/RendezVous.php';

class PatientController {
    public static $rendezVousList = [];

    public function demanderRendezVous() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $specialite = $_POST['specialite'];
            $id = count(self::$rendezVousList) + 1;
            $rv = new RendezVous($id, $specialite, date('Y-m-d'), 'en attente', 1);
            self::$rendezVousList[] = $rv;
            echo "Demande enregistrée.<br>";
        }
        include 'view/demandeRV.php';
    }

    public function voirMesRendezVous() {
        include 'view/mesRV.php';
    }

    public function annulerRendezVous() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            echo "Demande d'annulation envoyée pour le RDV #$id.<br>";
        }
        include 'view/annulationRV.php';
    }
}
