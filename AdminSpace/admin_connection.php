<?php
// Inclure le fichier de connexion à la base de données
include_once("db.php");

// Récupérer les données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Préparer la requête SQL
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";

// Préparer et exécuter la requête en utilisant des déclarations préparées pour éviter les injections SQL
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

// Exécuter la requête
$stmt->execute();

// Vérifier s'il y a une correspondance dans la base de données
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    echo "Connexion réussie. Redirection vers le tableau de bord...";
    // Vous pouvez ajouter le code de redirection vers le tableau de bord ici
} else {
    echo "Identifiants incorrects. Veuillez réessayer.";
}

// Fermer la connexion et la déclaration
$stmt->close();
$conn->close();
?>
