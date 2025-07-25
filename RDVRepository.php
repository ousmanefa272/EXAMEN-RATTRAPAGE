<?php
require_once 'Database.php';
require_once 'model/RendezVous.php';

class RDVRepository {
    public function ajouter(RendezVous $rv) {
        $pdo = Database::getConnection();
        $sql = "INSERT INTO rendezvous (specialite, date_demande, etat, patient_id) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $rv->getSpecialite(),
            $rv->getDateDemande(),
            $rv->getEtat(),
            $rv->getPatientId()
        ]);
        return $pdo->lastInsertId();
    }

    public function listerParPatient($patientId) {
        $pdo = Database::getConnection();
        $sql = "SELECT * FROM rendezvous WHERE patient_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$patientId]);
        $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $listeRV = [];
        foreach ($resultats as $row) {
            $rv = new RendezVous($row['id'], $row['specialite'], $row['date_demande'], $row['etat'], $row['patient_id']);
            $listeRV[] = $rv;
        }
        return $listeRV;
    }
}
