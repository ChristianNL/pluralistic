<?php
global $conn;
include("session_control.php");
include_once("db.php");

if (isset($_POST['titreRealisation'])) {
    $titreRealisation = $_POST['titreRealisation'];

    // Récupérer l'id de la realisation à partir du nom du produit
    $stmt1 = $conn->prepare("SELECT id, image_path FROM realisation WHERE realisation_title=?");
    $stmt1->bind_param("s", $titreRealisation);
    $stmt1->execute();
    $result = $stmt1->get_result();

    if ($result->num_rows === 0) {
        echo "Image non trouvé.";
    } else {
        $row = $result->fetch_assoc();
        $idRealisation = $row['id'];
        $imagePath = $row['image_path'];

        // Supprimer le produit à l'aide de l'id
        $stmt2 = $conn->prepare("DELETE FROM realisation WHERE id=?");
        $stmt2->bind_param("s", $idRealisation);
        if ($stmt2->execute()) {
            // Supprimer l'image associée a la realisation du dossier
            if (file_exists($imagePath)) {
                unlink($imagePath); // Supprimer le fichier image
            }
            echo "Le produit et son image ont été supprimés avec succès.";
        } else {
            echo "Erreur lors de la suppression du produit";
        }
        $stmt2->close();
    }

    $stmt1->close();
} else {
    echo "Le titre de la realisation à supprimer n'a pas été fourni.";
}

$conn->close();
?>
