<?php
global $conn;
include("session_control.php");
include_once("db.php");

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $name = $_POST['nom_service'];
    $comment = $_POST['service_desc'];

    // Préparation de la requête SQL
    $sql = "INSERT INTO services (nom_service, service_desc) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    // Liaison des paramètres
    $stmt->bind_param("ss", $name, $comment);

    // Exécution de la requête
    if ($stmt->execute()) {
        echo "Le service a été ajouté avec succès.";
        header("Location: all_service.php");
    } else {
        echo "Erreur lors de l'ajout du service : " . $stmt->error;
    }

    // Fermer la déclaration et la connexion à la base de données
    $stmt->close();
    $conn->close();
}
?>
