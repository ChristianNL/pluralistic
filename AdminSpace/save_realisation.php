<?php
global $conn;
include("session_control.php");
include_once("db.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize the data
        $productName = htmlspecialchars($_POST["realisationTitle"]);
        $productDescription = htmlspecialchars($_POST["realisationDescription"]);

        if (isset($_FILES["realisationImage"])) {
            $targetFolder = "Image/Realisation/";

            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'heif', 'heic'];
            $filename = $_FILES["realisationImage"]["name"];
            $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

            if (!in_array($fileExtension, $allowedExtensions)) {
                die("Extension de fichier non autorisée. Seuls les fichiers JPG, JPEG, PNG, GIF, HEIF et HEIC sont autorisés.");
            }

            // File upload handling
            if (!file_exists($targetFolder)) {
                mkdir($targetFolder, 0777, true);
            }

            $imageFileType = $_FILES["realisationImage"]["type"];
            $allowedTypesRegex = '/(\.jpg|\.jpeg|\.png|\.gif|\.heif|\.heic)$/i';

            if (preg_match($allowedTypesRegex, $filename)) {
                $uniqueFileName = uniqid() . '_' . basename($_FILES["realisationImage"]["name"]);
                $targetFile = $targetFolder . $uniqueFileName;
                move_uploaded_file($_FILES["realisationImage"]["tmp_name"], $targetFile);
                $productImagePath = $targetFile;
            } else {
                die("Type de fichier non autorisé. Seuls les fichiers JPG, JPEG, PNG, GIF, HEIF et HEIC sont autorisés.");
            }
        }

        // Insert data into the database using prepared statements
        $stmt = $conn->prepare("INSERT INTO realisation (realisation_title, image_path, realisation_desc) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $productName, $productImagePath, $productDescription);

        if ($stmt->execute()) {
            echo "Image enregistré avec succès.";
            header("Location: all_realisation.php");
        } else {
            echo "Erreur lors de l'enregistrement : " . $stmt->error;
        }

        $stmt->close();
    }
    $conn->close();
?>
