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



<?php
/*global $conn;
include_once("AdminSpace/db.php");

echo "<link href='ImageSlide_1_style.css' rel='stylesheet'>";
echo "<script src='ImageSlide_1_script.js'></script>";
$result = $conn -> query("SELECT realisation_title, realisation_desc, image_path from realisation ORDER BY date_enregistrement");

$output = "";

if($result) {
    //$realisation_slide_1_prev = 'realisation_slide_1_prev';
    //$realisation_slide_1_next= 'realisation_slide_1_next';
    if ($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {

            $output .= "<div class='realisation-slide-1-item' style='background-image: url(AdminSpace/" . $row['image_path'] . ");'>
                <div class='realisation-slide-1-img-content'><div class='realisation-slide-1-img-name'>". $row['realisation_title'] .
                "</div><div class='realisation-slide-1-img-des'>" . $row['realisation_desc'] . "</div></div></div>";
        }
        $output .= "";
    } else {
        $output = "<p></p>";
    }
} else {
    $output = "<p></p>";
}
echo "<div class='container px-5 my-5'><div class='row gx-5'>";
echo "<div class='realisation-boxe'><div class='realisation-slide-1'>";
echo $output ;
echo "<div class='realisation-slide-1-button'><button class='realisation-slide-1-prev' onclick='realisation_slide_1_prev()'>
    <i class='fa-solid fa-arrow-left'></i></button><button class='realisation-slide-1-next' onclick='realisation_slide_1_next()'>
    <i class='fa-solid fa-arrow-right'></i></button></div>";
echo "</div></div></div></div>";
//echo "<div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center'>" . $output . "</div>";
?>*/