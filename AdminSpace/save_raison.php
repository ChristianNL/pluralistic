<?php
global $conn;
include("session_control.php");
include_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the data
    $productName = htmlspecialchars($_POST["raisonTitle"]);
    $productDescription = htmlspecialchars($_POST["raisonDescription"]);

    // Insert data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO raison (raison_title, raison_desc) VALUES (?, ?)");
    $stmt->bind_param("ss", $productName, $productDescription);

    if ($stmt->execute()) {
        echo "Raison enregistrée avec succès.";
        header("Location: all_raisons.php");
    } else {
        echo "Erreur lors de l'enregistrement : " . $stmt->error;
    }

    $stmt->close();
}
// fatal error : Uncaught ArgumentCountError. The number of element in the type definition string must match the number of bind variables
// Close the database connection
$conn->close();
?>
