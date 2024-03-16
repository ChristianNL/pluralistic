<?php
include_once("db.php");

if (isset($_POST['nomProduit'])) {
    $nomProduit = $_POST['nomProduit'];

    // Récupérer l'id du produit à partir du nom du produit
    $stmt1 = $conn->prepare("SELECT product_id, image_path FROM produits WHERE nom_produit=?");
    $stmt1->bind_param("s", $nomProduit);
    $stmt1->execute();
    $result = $stmt1->get_result();

    if ($result->num_rows === 0) {
        echo "Produit non trouvé.";
    } else {
        $row = $result->fetch_assoc();
        $idProduit = $row['product_id'];
        $imagePath = $row['image_path'];

        // Supprimer le produit à l'aide de l'id
        $stmt2 = $conn->prepare("DELETE FROM produits WHERE product_id=?");
        $stmt2->bind_param("s", $idProduit);
        if ($stmt2->execute()) {
            // Supprimer l'image associée au produit du dossier
            if (file_exists($imagePath)) {
                unlink($imagePath); // Supprimer le fichier image
            }
            echo "Le produit et son image ont été supprimés avec succès.";
        } else {
            echo "Erreur lors de la suppression du produit : " . $stmt2->error;
        }
        $stmt2->close();
    }

    $stmt1->close();
} else {
    echo "Le nom du produit à supprimer n'a pas été fourni.";
}

$conn->close();
?>
