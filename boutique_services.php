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

    
    <!-- Meta tags for SEO -->
    <meta name="description" content="Découvrez tous nos services chez Pluralistic. Explorez un univers de produits variés et de qualité grâce à notre service de broderie, d'impression et de sérigraphie.">
    <meta name="keywords" content="Pluralistic, Boutique, Services, Produits, Commerce générale, Prestation de services, Impression, Sérigraphie, Broderie Industrielle, Boutique au Cameroun, Services au Cameroun, Produits au Cameroun, Commerce générale au Cameroun, Prestation de services au Cameroun, Impression au Cameroun, Sérigraphie au Cameroun, Broderie Industrielle au Cameroun">
    <meta name="author" content="Pluralistic Communication, Mani Entreprises">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Boutique - Produits">
    <meta property="og:description" content="Découvrez tous nos services chez Pluralistic. Explorez un univers de produits variés et de qualité grâce à notre service de broderie, d'impression et de sérigraphie.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="www.pluralistic.com">
    <meta property="og:image" content="assets/logo.svg">
    
    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@votrecompte">
    <meta name="twitter:title" content="Boutique - Produits">
    <meta name="twitter:description" content="Découvrez tous nos services chez Pluralistic. Explorez un univers de produits variés et de qualité grâce à notre service de broderie, d'impression et de sérigraphie.">
    <meta name="twitter:image" content="URL de l'image à afficher sur Twitter">
</head>
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
                    <li class="nav-item"><a class="nav-link" href="a_propos.php">A Propos</a></li>
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
                    $result = $conn->query("SELECT nom_service, service_desc from services");

                    // Liste des noms d'icônes à utiliser.
                    $icons = array("icons8-cartouche-laser-96.png", "icons8-encre-96.png", "icons8-engrenage-96.png", "icons8-calques-96.png", "icons8-prestations-de-service-96.png");

                    // Variable pour stocker la sortie HTML générée.
                    $output = "";
                    $whatsappNumber = "+237696637420";
                    $currentIcon = 0;

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Bloc HTML pour chaque service
                            $serviceName = $row['nom_service'];
                            $serviceDesc = $row['service_desc'];
                            // Sélectionne le nom d'icône à utiliser pour ce service.
                            $iconName = $icons[$currentIcon];
                            $currentIcon = ($currentIcon + 1) % count($icons); // Incrémente et boucle dans la liste des icônes

                            $output .= "<div class='col-lg-4'>";
                            $output .= "<div class='features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3'>";
                            $output .= "<div class='features-icons-icon d-flex'><img src='assets/".$iconName."' alt='icon'></div>";
                            $output .= "<h3>".$serviceName."</h3>";
                            $output .= "<p class='lead mb-0'>".$serviceDesc."</p>";
                            $output .= "<a class='text-decoration-none' href='whatsapp://send?phone=".$whatsappNumber."&text=Bonjour%2FBonsoir%2C%20%0Aj%27aimerais%20en%20savoir%20plus%20sur%20votre%20service%20%3A%20"
                                .$serviceName.".%20%0AQuelles%20sont%20les%20modalit%C3%A9s%20%3F' target='_blank'>En savoir plus <i class='bi bi-arrow-right'></i></a>";
                            $output .= "</div></div>";
                        }
                    } else {
                        $output = "<p></p>";
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
                    <a class="text-decoration-none" href='whatsapp://send?phone=+237696637420&text=Bonjour%2FBonsoir%2C%20%0Aj%27aimerais%20en%20savoir%20plus%20sur%20votre%20service%20%3A%20d%27Imprimerie%20Offset.%20%0AQuelles%20sont%20les%20modalit%C3%A9s%20%3F'>
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
                    <a class="text-decoration-none" href='whatsapp://send?phone=+237696637420&text=Bonjour%2FBonsoir%2C%20%0Aj%27aimerais%20en%20savoir%20plus%20sur%20votre%20service%20%3A%20de%20Confection%20Textile.%20%0AQuelles%20sont%20les%20modalit%C3%A9s%20%3F'>
                        En savoir plus
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="row g-0">
            <div class="col-lg-6 text-white order-lg-1 showcase-img" style="background-image: url('assets/images/broderie-4.jpg')"></div>
                <div class="col-lg-6  my-auto showcase-text">
                    <h2>Broderie Industrielle</h2>
                    <p class="lead mb-0">Découvrez l'élégance haut de gamme de notre service de broderie industrielle. 
                        Nous apportons des solutions textiles créatives et personnalisées pour sublimer vos vêtements 
                        et produits. Nos designs de broderie sont soigneusement exécutés sur une variété de matériaux 
                        de haute qualité, garantissant ainsi un résultat durable et de haute qualité. Faites confiance 
                        à notre savoir-faire pour vous donner une apparence unique.</p>
                    <a class="text-decoration-none" href='whatsapp://send?phone=+237696637420&text=Bonjour%2FBonsoir%2C%20%0Aj%27aimerais%20en%20savoir%20plus%20sur%20votre%20service%20%3A%20de%20Broderie%20Industrielle.%20%0AQuelles%20sont%20les%20modalit%C3%A9s%20%3F'>
                        En savoir plus
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/images/serigraphie-3.jpg')"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Serigraphie Moderne</h2>
                    <p class="lead mb-0">Notre service de sérigraphie moderne apporte une dimension artistique à vos 
                        créations. Grâce à des techniques avancées, nous produisons des designs vibrants et durables 
                        sur une variété de surfaces. Des impressions accrocheuses sur textiles aux affiches percutantes,
                         la sérigraphie moderne donne vie à vos idées avec éclat et précision.</p>
                    <a class="text-decoration-none" href='whatsapp://send?phone=+237696637420&text=Bonjour%2FBonsoir%2C%20%0Aj%27aimerais%20en%20savoir%20plus%20sur%20votre%20service%20%3A%20de%20Serigraphie%20Moderne.%20%0AQuelles%20sont%20les%20modalit%C3%A9s%20%3F'>
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
                        <li><a class="whatsapp" href='whatsapp://send?phone=+237696637420&text=Bonjour%2C%20%0Aje%20souhaite%20obtenir%20de%20l%27aide%2Fdes%20informations%20suppl%C3%A9mentaires.'><i class="bi-whatsapp fs-6"></i> +237 696 63 74 20</a></li>
                        <li><a class="whatsapp" href='whatsapp://send?phone=+237621148710&text=Bonjour%2C%20%0Aje%20souhaite%20obtenir%20de%20l%27aide%2Fdes%20informations%20suppl%C3%A9mentaires.'><i class="bi-whatsapp fs-6"></i> +237 621 14 87 10</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-3">
                    <h6>Liens Utiles </h6>
                    <ul class="footer-links">
                        <li><a href="index.php">Acceuil</a></li>
                        <li><a href="a_propos.php">A Propos</a></li>
                        <li><a href="boutique_services.php">Services</a></li>
                        <li><a href="boutique_produits.php">Produits</a></li>
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
                        <li><a class="whatsapp" href='whatsapp://send?phone=+237696637420&text=Bonjour%2C%20%0Aje%20souhaite%20obtenir%20de%20l%27aide%2Fdes%20informations%20suppl%C3%A9mentaires.'><i class="bi-whatsapp fs-3"></i></a></li>
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