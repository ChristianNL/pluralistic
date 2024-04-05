<?php
global $conn;
include_once("AdminSpace/db.php");

// Sélectionner la dernière vidéo ajoutée
$sql = "SELECT video_path FROM video ORDER BY date_added DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si des vidéos sont trouvées, extraire le chemin de la dernière vidéo
    $row = $result->fetch_assoc();
    $videoPath = $row["video_path"];

    // Afficher le lecteur vidéo avec la dernière vidéo chargée
    echo '<div class="container container-fluid py-5 border-bottom" id="features">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls style="max-height: 450px">
                            <source src="AdminSpace/' . $videoPath . '" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>';
} else {
    echo "";
}

// Fermer la requête
$result->close();
?>
