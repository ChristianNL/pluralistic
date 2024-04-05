<?php
global $conn;
session_start();
$session_lifetime = 300; // 30 minutes
session_set_cookie_params($session_lifetime);
include_once("db.php");

$error_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username != "" && $password != "") {
        $stmt = $conn->prepare("SELECT * FROM administrateurs WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            // Vérifier si le mot de passe est correct
            if (password_verify($password, $row['password'])) {

                $_SESSION['user_id'] = $row['id'];
                $_SESSION['loggedin'] = true;

                // Renouveler la session
                $_SESSION['LAST_ACTIVITY'] = time();

                echo "Success";
                header("Location: dashboard.html");
                exit(); // Arrêter l'exécution du script après la redirection
            } else {
                $error_msg = "Mot de passe incorrect.";
            }
        } else {
            $error_msg = "Nom d'utilisateur incorrect.";
        }
    }
}

$conn->close();

if ($error_msg != "") {
    echo $error_msg;
    //echo "<script>alert(\"Erreur : $error_msg\");</script>";
    header("Location: ../form_ connexion.html");
    exit(); // Arrêter l'exécution du script après la redirection
}
?>
