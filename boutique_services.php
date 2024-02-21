<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique - Produits</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/slider.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <img src="assets/logo.svg" class="logo" alt="">
            <a class="navbar-brand" href="index.php">Pluralistic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Acceuil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">A Propos</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Boutique</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item active" href="boutique_services.php">Nos Services</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="boutique_produits.php">Nos Produits</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-outline-dark d-sm-flex justify-content-sm-center me-sm-3" type="submit" href="form_ inscription.html">
                        <i class="me-1"></i>
                        S'abonner
                    </a>
                    <a class="btn btn-outline-dark d-sm-flex justify-content-sm-center" type="submit" href="form_ connexion.html">
                        <i class="me-1"></i>
                        Se Connecter
                    </a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="my-bg-green py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Nos Services</h1>
                <p class="lead fw-normal text-white-50 mb-0">Découvrez tous nos services.</p>
            </div>
        </div>
    </header>

    <!-- Nos services-->
    <section class="features-icons bg-light text-center">
        <div class="">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <img src="assets/icons8-produit-96.png" alt="">
                        </div>
                        <h3>Commerce generale</h3>
                        <p class="lead mb-0">Explorez un univers de produits variés et de qualité grâce à 
                            notre service de <strong>Broderie, d'Impression et de Serigraphie !</strong></p>
                        <a class="text-decoration-none" href="boutique_produits.php">
                            Explorez nos produits
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <img src="assets/icons8-prestations-de-service-96.png" alt="">
                        </div>
                        <h3>Prestation de services</h3>
                        <p class="lead mb-0">Nous dépassons vos attentes avec notre service de prestation, 
                            offrant des solutions personnalisées pour répondre 
                            à vos besoins spécifiques.</p>
                        <a class="text-decoration-none" href="">
                            En savoir plus
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <?php
                    include_once("AdminSpace/db.php");

                    // Requête pour sélectionner les services de la base de données.
                    $result = $conn->query("SELECT nom_service, service_desc from services");

                    // Variable pour stocker la sortie HTML générée.
                    $output = "";

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        // Bloc HTML pour chaque service
                        $output .= "<div class='col-lg-4'>";
                        $output .= "<div class='features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3'>";
                        $output .= "<div class='features-icons-icon d-flex'><img src='assets/icons8-calques-96.png' alt='icon'></div>";
                        $output .= "<h3>". $row['nom_service']. "</h3>";
                        $output .= "<p class='lead mb-0'>". $row['service_desc']. "</p>";
                        $output .= "<a class='text-decoration-none' href=''>En savoir plus <i class='bi bi-arrow-right'></i></a>";
                        $output .= "</div></div>";
                        }
                    } else {
                        $output = "<p>Aucun service n'a été trouvé.</p>";
                    }

                    $conn->close();

                    // Ajouter toutes les div avec classe "col-lg-4" après les deux premiers blocs de services.
                    echo $output;
                ?>

            </div>
        </div>
    </section>
    
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
            <div class="col-lg-6 order-lg-2 text-white showcase-img">
                    <div id="carousel-1">
                        <figure id="spinner">
                            <img src="assets/images/imprimerie_1.jpg" alt>
                            <img src="assets/images/imprimerie_2.jpg" alt>
                            <img src="assets/images/imprimerie_3.jpg" alt>
                        </figure>
                    </div>
                    <span style="float:left" class="ss-icon" onclick="galleryspin_1('-')">&lt;</span>
                    <span style="float:right" class="ss-icon" onclick="galleryspin_1('')">&gt;</span>
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Imprimerie Offset</h2>
                    <p class="lead mb-0">Notre service d'imprimerie offset repose sur une technologie avancée pour produire
                     des impressions de haute qualité et d'une netteté exceptionnelle. Que ce soit pour des brochures, des 
                     affiches ou d'autres supports, notre expertise en impression offset assure une reproduction 
                     fidèle et professionnelle de vos documents.</p>
                    <a class="text-decoration-none" href="">
                        En savoir plus
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img">
                    <div id="carousel-2">
                        <figure id="spinner-2">
                            <img src="assets/images/confection_textile_1.jpg" alt>
                            <img src="assets/images/confection_textile_2.jpg" alt>
                            <img src="assets/images/confection_textile_3.jpg" alt>
                        </figure>
                    </div>
                    <span style="float:left" class="ss-icon" onclick="carousselgalleryspin('-')">&lt;</span>
                    <span style="float:right" class="ss-icon" onclick="carousselgalleryspin('')">&gt;</span>
                </div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Confection Textile</h2>
                    <p class="lead mb-0">Explorez l'alliance entre qualité et style avec notre service de confection
                         textile. Nous créons des pièces uniques, personnalisées selon vos besoins, garantissant non
                          seulement un ajustement parfait mais également une représentation visuelle exceptionnelle 
                          de votre marque à travers des vêtements de qualité supérieure.</p>
                    <a class="text-decoration-none" href="">
                        En savoir plus
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('images/gallery-10.jpg')"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Serigraphie Moderne</h2>
                    <p class="lead mb-0">Notre service de sérigraphie moderne apporte une dimension artistique à vos 
                        créations. Grâce à des techniques avancées, nous produisons des designs vibrants et durables 
                        sur une variété de surfaces. Des impressions accrocheuses sur textiles aux affiches percutantes,
                         la sérigraphie moderne donne vie à vos idées avec éclat et précision.</p>
                    <a class="text-decoration-none" href="">
                        En savoir plus
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="site-footer my-bg-green">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="footer-logo">
                        <img src="assets/logo.svg" alt="logo">
                        <h6>pluralistic communication</h6>
                    </div>
                    <p class="text-justify">Votre partenaire d'impression et de sérigraphie de confiance. Nous sommes fiers de fournir des solutions d'impression haut de gamme adaptées à vos besoins professionnels. Notre équipe dévouée utilise des technologies de pointe pour offrir une qualité exceptionnelle, que ce soit pour des impressions sur papier, textiles ou tout autre support. Avec une attention méticuleuse aux détails et un engagement envers la satisfaction client, nous sommes là pour concrétiser vos idées en créations tangibles. Découvrez l'efficacité et la créativité de nos services d'impression et sérigraphie.</p>
                </div>
                <div class="col-xs-6 col-md-3">
                    <h6>Contactez-nous</h6>
                    <ul class="footer-links">
                        <li><a class="whatsapp" href="#"><i class="bi-whatsapp fs-6"></i> +237 696 63 74 20</a></li>
                        <li><a class="whatsapp" href="#"><i class="bi-whatsapp fs-6"></i> +237 621 14 87 10</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-3">
                    <h6>Liens Utiles </h6>
                    <ul class="footer-links">
                        <li><a href="">Acceuil</a></li>
                        <li><a href="">A Propos</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Produits</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by MANI Entreprises</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="bi-facebook fs-3"></i></a></li>
                        <li><a class="telegram" href="#"><i class="bi-telegram fs-3"></i></a></li>
                        <li><a class="whatsapp" href="#"><i class="bi-whatsapp fs-3"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="bi-linkedin fs-3"></i></a></li>   
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/slide.js"></script>
</body>
</html>