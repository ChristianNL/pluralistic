<?php
session_start();

// Définir la durée de validité du cookie de session
$session_lifetime = 300; // 30 minutes
session_set_cookie_params($session_lifetime);

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../form_ connexion.html"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit;
}

// Renouveler la session lors de l'activité de l'utilisateur
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $session_lifetime)) {
    session_unset();     // Unset toutes les variables de session
    session_destroy();   // Détruire la session
    header("Location: ../form_ connexion.html"); // Rediriger vers la page de connexion
    exit;
}

$_SESSION['LAST_ACTIVITY'] = time(); // Mettre à jour le temps de dernière activité

// Autres configurations de la base de données et autres fonctionnalités connexes
?>
