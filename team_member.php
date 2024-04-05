<?php
global $conn;
include_once("AdminSpace/db.php");

echo "<link href='css/teamSlide_1_style.css' rel='stylesheet'>";
echo "<script src='js/teamSlide_1_script.js'></script>";

echo "<div class='container px-5 my-5'><div class='row gx-5'>";

// Requête pour récupérer les données de la table realisation
$result = $conn->query("SELECT member_name, member_image_path, member_position FROM team ORDER BY date_enr LIMIT 20");

// Vérifier si la requête a réussi
if ($result && $result->num_rows > 0) {
    echo "<div class='slide-1-container'>";
    echo "<div class='slide-1'>";

    while ($row = $result->fetch_assoc()) {
        echo "<div class='slide-1-item' style='background-image: url(AdminSpace/" . $row['member_image_path'] . ");'>";
        echo "<div class='slide-1-img-content'>";
        echo "<div class='slide-1-img-name'>" . $row['member_name'] . "</div>";
        echo "<div class='slide-1-img-des'>" . $row['member_position'] . "</div>";
        echo "</div></div>";
    }

    echo "</div><div class='slide-1-button'>";
    echo "<button class='slide-1-prev' onclick='slide_1_prev()'><i class='fa-solid fa-arrow-left'></i></button>";
    echo "<button class='slide-1-next' onclick='slide_1_next()'><i class='fa-solid fa-arrow-right'></i></button>";
    echo "</div></div>";

    echo "";

} else {
    echo "Aucune entrée n'a été trouvée.";
}

echo "</div></div>";
?>