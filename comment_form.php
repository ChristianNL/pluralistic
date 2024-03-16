<?php

include_once("AdminSpace/db.php");

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $structure = $_POST["structure"];
    $etoiles = $_POST["etoiles"];
    $commentaire = $_POST["comment"];

    // Préparer la requête SQL d'insertion
    $sql = "INSERT INTO temoignages (nom, structure, etoiles, commentaire) VALUES (?, ?, ?, ?)";

    // Préparer la déclaration
    $stmt = $conn->prepare($sql);

    // Vérifier si la préparation a réussi
    if ($stmt) {
        // Binder les paramètres
        $stmt->bind_param("ssis", $nom, $structure, $etoiles, $commentaire);

        // Exécuter la requête
        if ($stmt->execute()) {
            echo "Votre témoignage a été enregistré avec succès.";
            header("Location: $_SERVER[HTTP_REFERER]");
        } else {
            echo "Erreur lors de l'enregistrement du témoignage : " . $stmt->error;
        }

        // Fermer la déclaration
        $stmt->close();
    } else {
        echo "Erreur de préparation de la requête : " . $conn->error;
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
