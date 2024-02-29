<?php
include_once("db.php");

if (isset($_POST['nomSubscriber'])) {
    $nomSubscriber = $_POST['nomSubscriber'];

    // Récupérer l'id du service à partir du nom du service
    $stmt1 = $conn->prepare("SELECT abonne_id FROM abonnes WHERE nom=?");
    $stmt1->bind_param("s", $nomSubscriber);
    $stmt1->execute();
    $result = $stmt1->get_result();

    if ($result->num_rows === 0) {
        echo "Abonne non trouvé.";
    } else {
        $row = $result->fetch_assoc();
        $idSubscriber = $row['abonne_id'];

        // Supprimer le service à l'aide de l'id
        $stmt2 = $conn->prepare("DELETE FROM abonnes WHERE abonne_id=?");
        $stmt2->bind_param("s", $idSubscriber);
        if ($stmt2->execute()) {
            echo "L'abonne a bien été supprimé avec succès.";
        } else {
            echo "Erreur lors de la suppression de l'abonne : " . $stmt2->error;
        }
        $stmt2->close();
    }

    $stmt1->close();
} else {
    echo "Le nom de l'abonne à supprimer n'a pas été fourni.";
}

$conn->close();
?>