<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the data
    $productName = htmlspecialchars($_POST["productName"]);
    $productPrice = floatval($_POST["productPrice"]);
    $productDescription = htmlspecialchars($_POST["productDescription"]);

    // File upload handling
    if (isset($_FILES["productImage"])) {
        $targetFolder = "Produit/Images/";
        $allowedTypes = ['image/jpeg', 'image/png'];

        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0777, true);
        }

        $imageFileType = $_FILES["productImage"]["type"];

        if (in_array($imageFileType, $allowedTypes)) {
            $uniqueFileName = uniqid() . '_' . basename($_FILES["productImage"]["name"]);
            $targetFile = $targetFolder . $uniqueFileName;
            move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile);
            $productImagePath = $targetFile;
        } else {
            die("Invalid file type. Only JPEG and PNG images are allowed.");
        }
    }

    // Insert data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO produits (nom_produit, prix_produit, image_path, produit_desc) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdss", $productName, $productPrice, $productImagePath, $productDescription);

    if ($stmt->execute()) {
        echo "Produit enregistré avec succès.";
        header("Location: all_product.php");
    } else {
        echo "Erreur lors de l'enregistrement du produit : " . $stmt->error;
    }

    $stmt->close();
}
// fatal error : Uncaught ArgumentCountError. The number of element in the type definition string must match the number of bind variables
// Close the database connection
$conn->close();
?>
