<?php
// Inclure le fichier de connexion à la base de données
include_once("AdminSpace/db.php");

// Vérifier que le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['name'];
    $prenom = $_POST['surname'];
    $ville = $_POST['Ville'];
    $mail = $_POST['email'];
    $tel = $_POST['phone'];
    $whatsapp = $_POST['WhatsAppNumber'];

    // Préparer la requête SQL avec des paramètres anonymes
    $sql = "INSERT INTO abonnes (nom, prenom, ville, mail, tel, whatsapp) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Liage des paramètres avec la méthode bindParam()
    $stmt->bind_param("ssssss", $nom, $prenom, $ville, $mail, $tel, $whatsapp);

    // Exécution de la requête
    if ($stmt->execute()) {
        echo "L'abonné a été ajouté avec succès.";
        echo "<script>history.back();</script>";
    } else {
        if ($stmt->errno == 1062 && strpos($stmt->error, "tel") !== false) {
            echo "Erreur : ce numéro de téléphone est déjà utilisé."; // Message d'erreur de contrainte d'unicité sur tel
            header("Location: $_SERVER[HTTP_REFERER]");
        } elseif ($stmt->errno == 1062 && strpos($stmt->error, "mail") !== false) {
            echo "Erreur : cette adresse e-mail est déjà utilisée."; // Message d'erreur de contrainte d'unicité sur mail
            header("Location: $_SERVER[HTTP_REFERER]");
        } elseif ($stmt->errno == 1062 && strpos($stmt->error, "whatsapp") !== false) {
            echo "Erreur : ce numéro WhatsApp est déjà utilisé."; // Message d'erreur de contrainte d'unicité sur WhatsApp
            header("Location: $_SERVER[HTTP_REFERER]");
        } else {
            echo "Erreur lors de l'ajout de l'abonné : " . $stmt->error; // Message d'erreur générique
            header("Location: $_SERVER[HTTP_REFERER]");
        }    
    }

    // Fermer la connexion et la déclaration
    $stmt->close();
    $conn->close();
}
?>