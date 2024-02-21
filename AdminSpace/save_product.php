<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];
    $productDescription = $_POST["productDescription"];
    $productImagePath = $_POST["productImage"];
    
    // Gérer le fichier image
    if (isset($_FILES["productImage"])) {
        $targetFolder = "Produit/Images/";

        // Assurez-vous que le dossier de destination existe
        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0777, true);
        }

        $targetFile = $targetFolder . basename($_FILES["productImage"]["name"]);
        move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile);

        $productImagePath = $targetFile;
    }

    // Enregistrement du produit dans la base de données
    $sql = "INSERT INTO produits (nom_produit, prix_produit, image_path, produit_desc) VALUES ('$productName', $productPrice, '$productImagePath', '$productDescription')";

    if ($conn->query($sql) === TRUE) {
        echo "Produit enregistré avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement du produit : " . $conn->error;
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
