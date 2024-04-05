<?php
session_start();

// Définir la durée de validité du cookie de session
$session_lifetime = 300; //  minutes
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
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- META Tags for SEO -->
        <meta name="robots" content="noindex, nofollow">
        <meta name="author" content="Pluralistic Communication, MANI Entreprises">

        <title>Dashboard - All Products</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboard.html">Pluralistic Dashboard</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" type="" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link" href="dashboard.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Acceuil
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Administrateurs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="new_admin.html">Nouvel administrateur</a>
                                    <a class="nav-link" href="all_admin.php">Tous les administrateurs</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVideo" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-video"></i></div>
                                Video
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseVideo" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="new_video.html">Nouvelle video</a>
                                    <a class="nav-link" href="all_video.php">Toutes les videos</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Boutique
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Services
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="all_service.php">Tous Les Services</a>
                                            <a class="nav-link" href="new_service.html">Nouveau Service</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Produits
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="all_product.php">Tous les Produits</a>
                                            <a class="nav-link" href="new_product.html">Nouveau Produit</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseImage" aria-expanded="false" aria-controls="collapseImage">
                                <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                                Image
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseImage" aria-labelledby="headingImage" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionImage">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRealisation" aria-expanded="false" aria-controls="collapseRealisation">
                                        Réalisation
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseRealisation" aria-labelledby="headingRealisation" data-bs-parent="#sidenavAccordionImage">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="all_realisation.php">Toutes les Réalisations</a>
                                            <a class="nav-link" href="new_realisation.html">Nouvelle Réalisation</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTeam" aria-expanded="false" aria-controls="collapseTeam">
                                        Team
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseTeam" aria-labelledby="headingTeam" data-bs-parent="#sidenavAccordionImage">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="all_team_members.php">Tous les Membres</a>
                                            <a class="nav-link" href="new_team_member.html">Nouveau Membre</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseContenus" aria-expanded="false" aria-controls="collapseContenus">
                                <div class="sb-nav-link-icon"><i class="fas fa-th"></i></div>
                                Contenus
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseContenus" aria-labelledby="headingContenus" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionContenus">
                                    <!-- Section Discover -->
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDiscover" aria-expanded="false" aria-controls="collapseRealisation">
                                        Decouvrez qui nous sommes
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseDiscover" aria-labelledby="headingRealisation" data-bs-parent="#sidenavAccordionContenus">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="all_intros.php">Toutes les introductions</a>
                                            <a class="nav-link" href="new_introduction.html">Nouvel Introduction</a>
                                        </nav>
                                    </div>
                                    <!-- Section Why Us -->
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseWhyUs" aria-expanded="false" aria-controls="collapseTeam">
                                        Pourquoi nous choisir
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseWhyUs" aria-labelledby="headingTeam" data-bs-parent="#sidenavAccordionContenus">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="all_raisons.php">Toutes les raisons</a>
                                            <a class="nav-link" href="new_raison.html">Nouvelle raison</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>



                            <div class="sb-sidenav-menu-heading">Extensions</div>
                            <a class="nav-link" href="all_comments.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Tous les commentaires
                            </a>
                            <a class="nav-link" href="all_subscriber.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Listes des abonnes
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tableau de Bord</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tableau de Bord</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Produits
                            </div>
                            <div id="abonnes-table" class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nom du produit</th>
                                            <th>Prix</th>
                                            <th>Description du Produit</th>
                                            <th>Chemin d'acces</th>
                                            <th>Date d'enregistrement</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom du produit</th>
                                            <th>Prix</th>
                                            <th>Description du Produit</th>
                                            <th>Chemin d'acces</th>
                                            <th>Date d'enregistrement</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>                                    
                                        <?php
                                        global $conn;
                                        include_once("db.php");

                                        $result = $conn -> query("SELECT nom_produit, prix_produit, produit_desc, image_path, date_enr from produits");
                                        if ($result -> num_rows > 0) {
                                            while ($row = $result -> fetch_assoc()) {
                                                echo "<tr><td>". $row['nom_produit']. "</td><td>". $row['prix_produit']. "</td><td>". $row['produit_desc']. "</td><td>".
                                                $row['image_path']. "</td><td>". $row['date_enr']. "</td>";
                                                echo "<td><button onclick='deleteProduct(\"" . $row['nom_produit'] . "\")'>Supprimer</button></td></tr>";
                                            }
                                            echo "</table>";
                                        } else {
                                            echo "Aucun Image pour le moment";
                                        }

                                        $conn->close();
                                        ?>

                                        <script>
                                            function deleteProduct(nomProduit) {
                                                if (confirm("Êtes-vous sûr de vouloir supprimer ce produit ?")) {
                                                    var xhr = new XMLHttpRequest();
                                                    xhr.open("POST", "delete_product.php", true);
                                                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                                    xhr.onreadystatechange = function() {
                                                        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                                                            alert(this.responseText);
                                                            window.location.reload();
                                                        }
                                                    };
                                                    xhr.send("nomProduit=" + nomProduit);
                                                }
                                            }
                                        </script>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; MANI Entreprises 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>