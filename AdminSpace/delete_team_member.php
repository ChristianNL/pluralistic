<?php
global $conn;
include("session_control.php");
include_once("db.php");

if (isset($_POST['nomMembre'])) {
    $nomMembre = $_POST['nomMembre'];

    // Récupérer l'id
    $stmt1 = $conn->prepare("SELECT id, member_image_path FROM team WHERE member_name=?");
    $stmt1->bind_param("s", $nomMembre);
    $stmt1->execute();
    $result = $stmt1->get_result();

    if ($result->num_rows === 0) {
        echo "Image non trouvé.";
    } else {
        $row = $result->fetch_assoc();
        $idMembre = $row['id'];
        $imagePath = $row['member_image_path'];

        // Supprimer à l'aide de l'id
        $stmt2 = $conn->prepare("DELETE FROM team WHERE id=?");
        $stmt2->bind_param("s", $idMembre);
        if ($stmt2->execute()) {
            // Supprimer l'image associée
            if (file_exists($imagePath)) {
                unlink($imagePath); // Supprimer le fichier image
            }
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
