<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Inclure le fichier de connexion à la base de données
include_once("db.php");

// Fonction pour récupérer les données des produits, services et abonnés
function getData() {
    global $conn;

    $data = array();

    // Récupérer les données des produits
    $result = $conn->query("SELECT * FROM produits");
    //$data['produits'] = $result->fetch_all(MYSQLI_ASSOC);
    $data = array();
    while ($row = $result -> fetch_assoc()) {
        $data[] = $row;
    }

    // Récupérer les données des services
    $result = $conn->query("SELECT * FROM services");
    //$data['services'] = $result->fetch_all(MYSQLI_ASSOC);
    $data = array();
    while ($row = $result -> fetch_assoc()) {
        $data[] = $row;
    }

    // Récupérer les données des abonnés
    $result = $conn->query("SELECT * FROM abonnes");
    //$data['abonnes'] = $result->fetch_all(MYSQLI_ASSOC);
    $data = array();
    while ($row = $result -> fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}

// Récupérer les données et les renvoyer au format JSON
$data = getData();
echo json_encode($data);

// Fermer la connexion à la base de données
$conn->close();
?>
