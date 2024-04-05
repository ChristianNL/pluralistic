<?php
global $conn;
//include("session_control.php");
include_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the data
    $productName = htmlspecialchars($_POST["teamMemberName"]);
    $productDescription = htmlspecialchars($_POST["teamMemberPost"]);

    // File upload handling
    /*if (isset($_FILES["realisationImage"])) {
        $targetFolder = "Image/Realisation/";
        $allowedTypes = ['image/jpeg', 'image/png'];

        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0777, true);
        }

        $imageFileType = $_FILES["realisationImage"]["type"];

        if (in_array($imageFileType, $allowedTypes)) {
            $uniqueFileName = uniqid() . '_' . basename($_FILES["realisationImage"]["name"]);
            $targetFile = $targetFolder . $uniqueFileName;
            move_uploaded_file($_FILES["realisationImage"]["tmp_name"], $targetFile);
            $productImagePath = $targetFile;
        } else {
            die("Invalid file type. Only JPEG and PNG images are allowed.");
        }
    }*/

    if (isset($_FILES["teamMemberImage"])) {
        $targetFolder = "Image/TeamMember/";

        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'heif', 'heic'];
        $filename = $_FILES["teamMemberImage"]["name"];
        $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

        if (!in_array($fileExtension, $allowedExtensions)) {
            die("Extension de fichier non autorisée. Seuls les fichiers JPG, JPEG, PNG, GIF, HEIF et HEIC sont autorisés.");
        }

        // File upload handling
        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0777, true);
        }

        $imageFileType = $_FILES["teamMemberImage"]["type"];
        $allowedTypesRegex = '/(\.jpg|\.jpeg|\.png|\.gif|\.heif|\.heic)$/i';

        if (preg_match($allowedTypesRegex, $filename)) {
            $uniqueFileName = uniqid() . '_' . basename($_FILES["teamMemberImage"]["name"]);
            $targetFile = $targetFolder . $uniqueFileName;
            move_uploaded_file($_FILES["teamMemberImage"]["tmp_name"], $targetFile);
            $productImagePath = $targetFile;
        } else {
            die("Type de fichier non autorisé. Seuls les fichiers JPG, JPEG, PNG, GIF, HEIF et HEIC sont autorisés.");
        }
    }

    // Insert data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO team (member_name, member_image_path, member_position) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $productName, $productImagePath, $productDescription);

    if ($stmt->execute()) {
        echo "Image enregistré avec succès.";
        header("Location: all_team_members.php");
    } else {
        echo "Erreur lors de l'enregistrement : " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
