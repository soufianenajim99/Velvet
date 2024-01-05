<?php
require_once('../models/Facture.php');

class FactureController {
    public function displayStudentResult($id) {
        // Instancier le modèle des étudiants
        $Facture = new Facture();

        // Récupérer les données de l'étudiant en fonction de l'ID
        $Facture = $Facture->getFacture($id);

        // Charger la vue
        require('./views/Facture');
    }
}
?>
