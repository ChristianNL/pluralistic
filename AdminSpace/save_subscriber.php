<?php
// Inclure le fichier de connexion à la base de données
include_once("db.php");

// Récupérer les données du formulaire
$nom = $_POST['name'];
$prenom = $_POST['surname'];
$ville = $_POST['ville'];
$mail = $_POST['email'];
$tel = $_POST['phone'];
$whatsapp = $_POST['WhatsAppNumber'];

// Préparer la requête SQL
$sql = "INSERT INTO abonnes (nom, prenom, ville, mail, tel, whatsapp) VALUES (?, ?, ?, ?, ?, ?)";

// Préparer et exécuter la requête en utilisant des déclarations préparées pour éviter les injections SQL
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $nom, $prenom, $ville, $mail, $tel, $whatsapp);

// Exécuter la requête
if ($stmt->execute()) {
    echo "L'abonné a été ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout de l'abonné : " . $stmt->error;
}

// Fermer la connexion et la déclaration
$stmt->close();
$conn->close();
?>
