<?php
global $conn;
include("session_control.php");
include_once("db.php");

if (isset($_POST['videoTitle'])) {
    $videoTitle = $_POST['videoTitle'];

    // Récupérer l'id de la vidéo à partir du titre
    $stmt1 = $conn->prepare("SELECT id, video_path FROM video WHERE video_title=?");
    $stmt1->bind_param("s", $videoTitle);
    $stmt1->execute();
    $result = $stmt1->get_result();

    if ($result->num_rows === 0) {
        echo "Vidéo non trouvée.";
    } else {
        $row = $result->fetch_assoc();
        $videoId = $row['id'];
        $videoPath = $row['video_path'];

        // Supprimer la vidéo à l'aide de l'id
        $stmt2 = $conn->prepare("DELETE FROM video WHERE id=?");
        $stmt2->bind_param("i", $videoId);
        if ($stmt2->execute()) {
            // Supprimer la vidéo du dossier
            if (file_exists($videoPath)) {
                unlink($videoPath); // Supprimer le fichier vidéo
            }
            echo "La vidéo a été supprimée avec succès.";
        } else {
            echo "Erreur lors de la suppression de la vidéo.";
        }
        $stmt2->close();
    }

    $stmt1->close();
} else {
    echo "Le titre de la vidéo à supprimer n'a pas été fourni.";
}

$conn->close();
?>
