<?php
global $conn;
include_once("AdminSpace/db.php");

echo "<div class='row g-0'>";

// Requête pour récupérer les données de la table intro
$result = $conn->query("SELECT bold_part, image_path, intro_text FROM intro ORDER BY date_enr DESC LIMIT 1");

// Vérifier si la requête a réussi
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        //echo "<div class='col-lg-7 order-lg-2 text-white showcase-img' style='background-image: url(AdminSpace/" . $row['image_path'] . ")'>";
        echo "<div class='col-lg-7 order-lg-2 text-white showcase-img' style='background-image: url(AdminSpace/" . $row['image_path'] . ");'>";
        echo "</div><div class='col-lg-5 order-lg-1 showcase-text'>";
        echo "<p class='leader mb-0 fs-5'><strong>" . $row['bold_part'] . "</strong> " . $row['intro_text'] . "</p>";
        echo "</div>";
    }
} else {
    echo "Aucune entrée intro n'a été trouvée.";
}

echo "</div>";
?>
