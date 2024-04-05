<?php
global $conn;
include("session_control.php");
include_once("db.php");

if (isset($_POST['boldPart'])) {
    $boldPart = $_POST['boldPart'];

    // Récupérer l'id
    $stmt1 = $conn->prepare("SELECT id, image_path FROM intro WHERE bold_part=?");
    $stmt1->bind_param("s", $boldPart);
    $stmt1->execute();
    $result = $stmt1->get_result();

    if ($result->num_rows === 0) {
        echo "Image non trouvé.";
    } else {
        $row = $result->fetch_assoc();
        $idIntro = $row['id'];
        $imagePath = $row['image_path'];

        // Supprimer à l'aide de l'id
        $stmt2 = $conn->prepare("DELETE FROM intro WHERE id=?");
        $stmt2->bind_param("s", $idIntro);
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
    echo "Le titre de la realisation à supprimer n'a pas été fourni.";
}

$conn->close();
?>
