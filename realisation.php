<?php
global $conn;
include_once("AdminSpace/db.php");

echo "<link href='css/ImageSlide_1_style.css' rel='stylesheet'>";
echo "<script src='js/ImageSlide_1_script.js'></script>";

echo "<div class='container px-5 my-5'><div class='row gx-5'>";

// Requête pour récupérer les données de la table realisation
$result = $conn->query("SELECT realisation_title, realisation_desc, image_path FROM realisation ORDER BY date_enregistrement DESC LIMIT 15");

// Vérifier si la requête a réussi
if ($result && $result->num_rows > 0) {
    echo "<div class='realisation-slide-1-container'>";
    echo "<div class='realisation-slide-1'>";

    while ($row = $result->fetch_assoc()) {
        echo "<div class='realisation-slide-1-item' style='background-image: url(AdminSpace/" . $row['image_path'] . ");'>";
        echo "<div class='realisation-slide-1-img-content'>";
        echo "<div class='realisation-slide-1-img-name'>" . $row['realisation_title'] . "</div>";
        echo "<div class='realisation-slide-1-img-des'>" . $row['realisation_desc'] . "</div>";
        echo "</div></div>";
    }

    echo "</div><div class='realisation-slide-1-button'>";
    echo "<button class='realisation-slide-1-prev' onclick='realisation_slide_1_prev()'><i class='fa-solid fa-arrow-left'></i></button>";
    echo "<button class='realisation-slide-1-next' onclick='realisation_slide_1_next()'><i class='fa-solid fa-arrow-right'></i></button>";
    echo "</div></div>";

    echo "";

} else {
    echo "Aucune entrée intro n'a été trouvée.";
}

echo "</div></div>";
?>
