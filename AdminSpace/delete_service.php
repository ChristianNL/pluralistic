<?php
global $conn;
include("session_control.php");
include_once("db.php");

if (isset($_POST['nomService'])) {
    $nomService = $_POST['nomService'];

    // Récupérer l'id du service à partir du nom du service
    $stmt1 = $conn->prepare("SELECT service_id FROM services WHERE nom_service=?");
    $stmt1->bind_param("s", $nomService);
    $stmt1->execute();
    $result = $stmt1->get_result();

    if ($result->num_rows === 0) {
        echo "Service non trouvé.";
    } else {
        $row = $result->fetch_assoc();
        $idService = $row['service_id'];

        // Supprimer le service à l'aide de l'id
        $stmt2 = $conn->prepare("DELETE FROM services WHERE service_id=?");
        $stmt2->bind_param("s", $idService);
        if ($stmt2->execute()) {
            echo "Le service a été supprimé avec succès.";
        } else {
            echo "Erreur lors de la suppression du service : " . $stmt2->error;
        }
        $stmt2->close();
    }

    $stmt1->close();
} else {
    echo "Le nom du service à supprimer n'a pas été fourni.";
}

$conn->close();
?>