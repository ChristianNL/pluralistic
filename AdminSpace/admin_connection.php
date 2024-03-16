<?php
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
            if ($password == $row['password']) {
                echo "Success";
                header("Location: dashbord.html");
            } else {
                $error_msg = "Mot de passe incorrect.";
            }
        } else {
            $error_msg = "Nom d'utilisateur incorrect.";
        }
    }
}

$conn->close();
?>

<?php
if ($error_msg != "") {
    ?>
    <script>alert("erreur : <?php echo $error_msg; ?>")</script>
    <?php
    header("Location: ../form_ connexion.html");
}
?>