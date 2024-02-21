<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'acceuil</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/sdd.css" rel="stylesheet" />
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
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Acceuil</a></li>
                    <li class="nav-item"><a class="nav-link" href="a_propos.html">A Propos</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Boutique</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="boutique_services.php">Nos Services</a></li>
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
                        Se connecter
                    </a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="my-bg-green py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Pluralistic Communication</h1>
                        <p class="lead text-white-50 mb-4">Vous propose ses services pour particulier et entreprises. Nous vous présentons également nos produits.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="form_ inscription.html">S'abonner</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="form_ connexion.html">Se connecter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Presentation-->
    <section class="py-5 bg-light border-bottom showcase" id="features">
        <div class="container container-fluid p-0">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Découvrez qui nous sommes</h2>
            </div>
            <div class="row g-0">
                <div class="col-lg-7 order-lg-2 text-white showcase-img" style="background-image: url('assets/images/plural-1.jpg')"></div>
                <div class="col-lg-5 order-lg-1 showcase-text">
                    <p class="leader mb-0"><strong>Pluralistic Communication</strong> est une entreprise dynamique spécialisée dans l'impression, la 
                        sérigraphie, la broderie industrielle, le commerce général et la prestation de services. 
                        Notre engagement envers l'excellence et la créativité nous distingue, offrant à nos
                         clients des solutions sur mesure pour leurs besoins d'impression et de communication.</p>
                </div>
            </div>
            </div>
        </div>
    </section>
    
    <!-- Pourquoi nous choisir-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Pourquoi nous choisir</h2>
            </div>
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"></div>
                    <h2 class="h4 fw-bolder">La qualité de nos produits et services</h2>
                    <p>Nous sommes une boutique qui s'efforce de fournir à nos clients des produits et services de la plus haute qualité. Nous travaillons avec des fournisseurs et des partenaires fiables pour nous assurer que nos produits sont de la meilleure qualité possible.</p>
                    <a class="text-decoration-none" href="#!">
                        Explorez nos services
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"></div>
                    <h2 class="h4 fw-bolder">Rapport qualité-prix</h2>
                    <p> Nous sommes conscients que les clients cherchent toujours des produits et services abordables sans compromettre la qualité. Nous offrons également des promotions régulières pour les clients réguliers et fidèles.</p>
                    <a class="text-decoration-none" href="boutique_produits.php">
                        Explorez nos produits
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"></div>
                    <h2 class="h4 fw-bolder">Notre localisation</h2>
                    <p>Nous sommes situés dans un emplacement idéal, facile d'accès et à proximité de nombreux endroits populaires. Nous sommes disponibles et accessibles pour nos clients. Nous sommes transparents dans nos politiques de prix et de retour. Nous fournissons des informations claires et détaillées sur les produits que nous vendons.</p>
                    <a class="text-decoration-none" href="#!">
                        A Propos de nous
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Nos services-->
    <section class="py-5 border-bottom features-icons bg-light text-center" id="features">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Nos Services</h2>
                <a class="text-decoration-none" href="boutique_services.php">
                    Explorez nos services
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
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
            </div>
        </div>
    </section>

    <!-- Produits-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Nos produits</h2>
                <a class="text-decoration-none" href="boutique_produits.php">
                    Explorez nos produits
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">

                    <?php 
                        include_once("AdminSpace/db.php");
                        $result = $conn -> query("SELECT nom_produit, prix_produit, image_path from produits LIMIT 4");

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo "<div class='card h-100'>";
                                echo "<img class='card-img-top' src='". $row['image_path']. "' alt='image produit'/>";
                                echo "<div class='card-body p-4'><div class='text-center'><h5 class='fw-bolder'>". 
                                    $row['nom_produit']. "</h5> XAF". $row['prix_produit']. "</div></div>";
                                echo "<div class='card-footer p-4 pt-0 border-top-0 bg-transparent'><div class='text-center'><a class='btn btn-outline-dark mt-auto' href='#'>Voir la collection</a></div></div>";
                                echo "</div>";
                            }
                        } else {
                            echo "";
                        }

                        $conn -> close();
                    ?>

                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Polo Brodé LOMOTIF</h5>
                                <!-- Product price-->
                                XAF 2500 - 10000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Voir la collection</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">T-Shirt</h5>
                                <!-- Product price-->
                                XAF 3 000 - 25 000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Voir la collection</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Chaussures</h5>
                                <!-- Product price-->
                                XAF 5 000 - 25 000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Voir la collection</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Chemises</h5>
                                <!-- Product price-->
                                XAF 5 000 - 25 000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Voir la collection</a></div>
                        </div>
                    </div>
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
                    <p class="text-justify">Votre partenaire d'impression et de sérigraphie de confiance. Nous 
                        sommes fiers de fournir des solutions d'impression haut de gamme adaptées à vos besoins
                         professionnels. Notre équipe dévouée utilise des technologies de pointe pour offrir une 
                         qualité exceptionnelle, que ce soit pour des impressions sur papier, textiles ou tout 
                         autre support. Avec une attention méticuleuse aux détails et un engagement envers la 
                         satisfaction client, nous sommes là pour concrétiser vos idées en créations tangibles.
                          Découvrez l'efficacité et la créativité de nos services d'impression et sérigraphie.</p>
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
                        <li><a href="index.php">Acceuil</a></li>
                        <li><a href="a_propos.html">A Propos</a></li>
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
</body>
</html>