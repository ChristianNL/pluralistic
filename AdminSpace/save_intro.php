<?php
global $conn;
include("session_control.php");
include_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the data
    $productName = htmlspecialchars($_POST["IntroBold"]);
    $productDescription = htmlspecialchars($_POST["introText"]);

    if (isset($_FILES["introImage"])) {
        $targetFolder = "Image/Others/";

        // Vérification de l'extension du fichier
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'heif', 'heic'];
        $filename = $_FILES["introImage"]["name"];
        $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

        if (!in_array($fileExtension, $allowedExtensions)) {
            die("Extension de fichier non autorisée. Seuls les fichiers JPG, JPEG, PNG, GIF, HEIF et HEIC sont autorisés.");
        }

        // File upload handling
        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0777, true);
        }

        $imageFileType = $_FILES["introImage"]["type"];
        $allowedTypesRegex = '/(\.jpg|\.jpeg|\.png|\.gif|\.heif|\.heic)$/i';

        if (preg_match($allowedTypesRegex, $filename)) {
            $uniqueFileName = uniqid() . '_' . basename($_FILES["introImage"]["name"]);
            $targetFile = $targetFolder . $uniqueFileName;
            move_uploaded_file($_FILES["introImage"]["tmp_name"], $targetFile);
            $productImagePath = $targetFile;
        } else {
            die("Type de fichier non autorisé. Seuls les fichiers JPG, JPEG, PNG, GIF, HEIF et HEIC sont autorisés.");
        }
    }

    // Insert data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO intro (bold_part, image_path, intro_text) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $productName, $productImagePath, $productDescription);

    if ($stmt->execute()) {
        echo "Introduction enregistré avec succès.";
        header("Location: all_intros.php");
    } else {
        echo "Erreur lors de l'enregistrement de l'introduction : " . $stmt->error;
    }

    $stmt->close();
}
// fatal error : Uncaught ArgumentCountError. The number of element in the type definition string must match the number of bind variables
// Close the database connection
$conn->close();
?>
