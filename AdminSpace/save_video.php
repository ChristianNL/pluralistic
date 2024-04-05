<?php
global $conn;
//include("session_control.php");
include_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the data
    $productName = htmlspecialchars($_POST["videoTitle"]);

    if (isset($_FILES["videoName"])) {
        $targetFolder = "Image/Video/";

        $allowedExtensions = ['mp4', 'webm', 'ogg'];
        $filename = $_FILES["videoName"]["name"];
        $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

        if (!in_array($fileExtension, $allowedExtensions)) {
            die("Extension de fichier non autorisée. Seuls les fichiers MP4, WebM et OGG sont autorisés.");
        }

        // File upload handling
        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0777, true);
        }

        $uniqueFileName = uniqid() . '_' . basename($_FILES["videoName"]["name"]);
        $targetFile = $targetFolder . $uniqueFileName;
        move_uploaded_file($_FILES["videoName"]["tmp_name"], $targetFile);
        $productVideoPath = $targetFile;
    }

    // Insert data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO video (video_title, video_path) VALUES (?, ?)");
    $stmt->bind_param("ss", $productName, $productVideoPath);

    if ($stmt->execute()) {
        echo "Vidéo enregistrée avec succès.";
        header("Location: all_video.php");
    } else {
        echo "Erreur lors de l'enregistrement : " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
