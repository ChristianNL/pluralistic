<?php
global $conn;
include_once("AdminSpace/db.php");

echo "<div class='container px-5 my-5'><div class='row gx-5'>";

// Requête pour récupérer les données de la table raison
$result = $conn->query("SELECT raison_title, raison_desc FROM raison");

// Vérifier si la requête a réussi
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='col-lg-4 mb-5 mb-lg-0'>";
        echo "<h2 class='h4 fw-bolder'>" . $row['raison_title'] . "</h2>";
        echo "<p class='fs-5'>" . $row['raison_desc'] . "</p>";
        echo "<a class='text-decoration-none fs-5' href='whatsapp://send?phone=+237696637420&text=Bonjour%20/%20Bonsoir%20je%20suis%20intéressé%20par%20vos%20services.' target='_blank'>";
        echo "Nous contacter ";
        echo "<i class='bi bi-whatsapp'></i>";
        echo "</a>";
        echo "</div>";
    }
} else {
    echo "Aucune entrée intro n'a été trouvée.";
}

echo "</div></div>";
?>
