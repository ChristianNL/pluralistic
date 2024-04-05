<?php
global $conn;
include("session_control.php");
include_once("db.php");

if (isset($_POST['titreRaison'])) {
    $titreRaison = $_POST['titreRaison'];

    // Récupérer l'id du service à partir du nom du service
    $stmt1 = $conn->prepare("SELECT id FROM raison WHERE raison_title=?");
    $stmt1->bind_param("s", $titreRaison);
    $stmt1->execute();
    $result = $stmt1->get_result();

    if ($result->num_rows === 0) {
        echo "non trouvé.";
    } else {
        $row = $result->fetch_assoc();
        $raisonId = $row['id'];

        // Supprimer le service à l'aide de l'id
        $stmt2 = $conn->prepare("DELETE FROM raison WHERE id=?");
        $stmt2->bind_param("s", $raisonId);
        if ($stmt2->execute()) {
            echo "Suppression reussie.";
        } else {
            echo "Erreur lors de la suppression : " . $stmt2->error;
        }
        $stmt2->close();
    }

    $stmt1->close();
} else {
    echo "Le nom à supprimer n'a pas été fourni.";
}

$conn->close();
?>