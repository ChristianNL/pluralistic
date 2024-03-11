<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique - Produits</title>
    <!-- META Tags for SEO -->
    <meta name="description" content="Pluralistic Communication offre des services d'impression, de sérigraphie et de broderie industrielle au Cameroun dans la ville de Yaoundé. Découvrez nos produits de qualité et nos solutions personnalisées pour particuliers et entreprises.">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="impression, sérigraphie, commerce général, services, produits, communication, qualité, Pluralistic Communication, impression au cameroun, sérigraphie au cameroun, commerce général au cameroun">
    <meta name="author" content="Pluralistic Communication, MANI Entreprises">
    <!-- Open Graph Tags -->
    <meta property="og:title" content="À Propos de Pluralistic Communication">
    <meta property="og:description" content="Découvrez qui nous sommes et ce que Pluralistic Communication offre en termes d'impression, sérigraphie, broderie, commerce général et services personnalisés. Notre engagement envers l'excellence nous distingue.">
    <meta property="og:image" content="assets/logo.svg">
    <meta property="og:url" content="www.pluralistic.com">

    <!-- Twitter Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="À Propos de Pluralistic Communication">
    <meta name="twitter:description" content="Découvrez qui nous sommes et ce que Pluralistic Communication offre en termes d'impression, sérigraphie, broderie, commerce général et services personnalisés. Notre engagement envers l'excellence nous distingue.">
    <meta name="twitter:image" content="assets/logo.svg">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
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
                    <li class="nav-item"><a class="nav-link" href="a_propos.php">A Propos</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Boutique</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="boutique_services.php">Nos Services</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item active" href="boutique_produits.php">Nos Produits</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark me-3" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span id="cart-badge" class="badge my-bg-green text-white ms-1 me-1 rounded-pill">0</span>
                        
                    </button>
                    <a href=""  onclick="envoyerCommande()" class="btn btn-success"> Valider </a>
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
                        <h1 class="display-5 fw-bolder text-white mb-2">Explorez nos produits</h1>
                        <p class="lead text-white-50 mb-4">Découvez tous nos produits</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="form_ inscription.html">S'abonner</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="form_ connexion.html">Se Connecter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            
            <?php 
                include_once("AdminSpace/db.php");
                $result = $conn -> query("SELECT nom_produit, prix_produit, image_path from produits");

                $output = "";

                if ($result) {
                    if ($result -> num_rows > 0) {
                        while ($row = $result -> fetch_assoc()) {

                            $output .= "<div class='col mb-5'>
                                <div class='card h-100'>
                                    <img class='card-img-top' src='AdminSpace/" . $row['image_path'] . "' alt='image produit'/>
                                    <div class='card-body p-4'>
                                    <div class='text-center'>
                                        <h5 class='fw-bolder'>" . $row['nom_produit'] . "</h5>
                                        XAF " . $row['prix_produit'] . "
                                    </div>
                                    </div>
                                    <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                    <div class='text-center'>
                                        <button class='btn btn-outline-dark mt-auto addToCart' data-product='" . $row['nom_produit'] . "' data-price='" . $row['prix_produit'] . "'>
                                        Ajouter au panier
                                        </button>
                                    </div>
                                    </div>
                                </div>
                                </div>";
                        }
                    } else {
                        $output = "<p></p>";
                    }
                } else {
                    $output = "<p></p>";
                }

                $conn -> close();
                echo "<div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center'>" . $output . "</div>";
            ?>
            
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
    <script src="js/basket.js"></script>
</body>
</html>