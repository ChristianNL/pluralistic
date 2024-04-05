<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <meta name="description" content="Découvrez tous nos services chez Pluralistic. Explorez un univers de produits variés et de qualité grâce à notre service de broderie, d'impression et de sérigraphie.">
    <meta name="keywords" content="Pluralistic, Boutique, Services, Produits, Commerce générale, Prestation de services, Impression, Sérigraphie, Broderie Industrielle, Boutique au Cameroun, Services au Cameroun, Produits au Cameroun, Commerce générale au Cameroun, Prestation de services au Cameroun, Impression au Cameroun, Sérigraphie au Cameroun, Broderie Industrielle au Cameroun">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Pluralistic Communication, Mani Entreprises">
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
    <!-- Title Page -->
    <title>Pluralistic Communication - Services d'impression, sérigraphie et commerce général</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/sdd.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/comment_form.css">
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
                    <li class="nav-item"><a class="nav-link" href="a_propos.php">A Propos</a></li>
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

                <?php include_once("intro.php"); ?>

            </div>
        </div>
    </section>

    <?php include_once("videoPlay.php"); ?>
    
    <!-- Pourquoi nous choisir-->
    <section class="py-5 border-bottom" id="features">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Pourquoi nous choisir</h2>
        </div>
        <?php include_once("whyUs.php"); ?>
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

                <?php
                    global $conn;
                    include_once("AdminSpace/db.php");
                    $result = $conn->query("SELECT nom_service, service_desc from services LIMIT 1");

                    // Liste des noms d'icônes à utiliser.
                    $icons = array("icons8-cartouche-laser-96.png", "icons8-encre-96.png", "icons8-engrenage-96.png", "icons8-calques-96.png", "icons8-prestations-de-service-96.png");

                    // Variable pour stocker la sortie HTML générée.
                    $output = "";
                    $whatsappNumber = "+237696637420";
                    $currentIcon = 0;

                    if($result) {
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
                    } else {
                        $output = "<p></p>";
                    }

                    // Ajouter toutes les div avec classe "col-lg-4" après les deux premiers blocs de services.
                    echo $output;
                ?>

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
            
            <?php 
                include_once("AdminSpace/db.php");
                $result = $conn -> query("SELECT nom_produit, prix_produit, image_path from produits LIMIT 8");

                $output = "";

                if($result) {
                    if ($result -> num_rows > 0) {
                        //echo "<div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center'>";
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
                                        <a class='btn btn-outline-dark mt-auto' href='boutique_produits.php' onclick='addToCart()'>Voir la collection</a>
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

                echo "<div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center'>" . $output . "</div>";
            ?>

        </div>
    </section>

    <!-- Temoignages -->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Temoignages</h2>
            </div>
            <?php include_once("testimonials.php") ?>
        </div>
    </section>

    <!-- Localisation -->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3980.730084217864!2d11.5189444!3d3.8679721999999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zM8KwNTInMDQuNyJOIDExwrAzMScwOC4yIkU!5e0!3m2!1sfr!2scm!4v1711704625324!5m2!1sfr!2scm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 col-md-12 comment-bg d-flex flex-column align-items-center">
                    <div class="comment_card">
                        <span class="comment_title">Laisser un commentaire/avis</span>
                        <form class="comment_form" method="post" action="comment_form.php">
                            <div class="comment_form_group">
                                <input placeholder="" type="text" id="nom" name="nom" required="required">
                                <label for="nom">Votre nom</label>
                            </div>
                            <div class="comment_form_group">
                                <input placeholder="" type="text" id="structure" name="structure" required="required">
                                <label for="structure">Votre Structure/Entreprise</label>
                            </div>
                            <div class="comment_form_group">
                                <input placeholder="" type="number" id="etoiles" name="etoiles" min="0" max="5" step="1" required="required">
                                <label for="etoiles">Nombre d'étoiles (de 1 à 5)</label>
                            </div>
                            <div class="comment_form_group">
                                <textarea placeholder="" id="comment" name="comment" rows="5" required="required"></textarea>
                                <label for="comment">Votre commentaire</label>
                            </div>
                            <button type="submit">Commenter</button>
                        </form>
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
</body>
</html>