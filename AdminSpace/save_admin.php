<?php
global $conn;
include("session_control.php");
include_once("db.php");

// Récupération des données du formulaire
$nom = $_POST['nom'];
$username = $_POST['username'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// Vérification du mot de passe
if($password != $password2) {
    echo "Les mots de passe ne correspondent pas.";
} else {

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Requête SQL préparée
    $sql = "INSERT INTO administrateurs (nom, username, telephone, password)
             VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssss", $nom, $username, $telephone, $hashed_password);

    if ($stmt->execute()) {
        echo "Administrateur ajouté avec succès";
        header("Location: all_admin.php");
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
