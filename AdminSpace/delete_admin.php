<?php
global $conn;
include("session_control.php");
include_once("db.php");

if (isset($_POST['username'])) {
    $username = $_POST['username'];

    // Récupérer l'id du service à partir du nom du service
    $stmt1 = $conn->prepare("SELECT admin_id FROM administrateurs WHERE username=?");
    $stmt1->bind_param("s", $username);
    $stmt1->execute();
    $result = $stmt1->get_result();

    if ($result->num_rows === 0) {
        echo "Administrateur non trouvé.";
    } else {
        $row = $result->fetch_assoc();
        $idAdmin = $row['admin_id'];

        // Supprimer le service à l'aide de l'id
        $stmt2 = $conn->prepare("DELETE FROM administrateurs WHERE admin_id=?");
        $stmt2->bind_param("s", $idAdmin);
        if ($stmt2->execute()) {
            echo "L'administrateur a bien été supprimé avec succès.";
        } else {
            echo "Erreur lors de la suppression de l'administrateur : " . $stmt2->error;
        }
        $stmt2->close();
    }

    $stmt1->close();
} else {
    echo "Le username de l'administrateur à supprimer n'a pas été fourni.";
}

$conn->close();
?>