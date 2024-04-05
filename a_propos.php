<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos de nous</title>
    <!-- META Tags for SEO-->
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
    <link rel="stylesheet" href="css/comment_form.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <script src="js/gallery.js"></script>
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
                    <li class="nav-item"><a class="nav-link active" href="a_propos.php">A Propos</a></li>
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
                    <a class="btn btn-primary btn-outline-dark d-sm-flex justify-content-sm-center me-sm-3" type="submit" href="form_ inscription.html">
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
                        <h1 class="display-5 fw-bolder text-white mb-2">A propos de nous</h1>
                        <p class="lead text-white-50 mb-4">Qui sommes-nous ? </p>
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

    <!-- Notre Equipe -->
    <section id="gallery py-5 bg-light" id="features">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Notre Equipe</h2>
            </div>

            <?php include_once("team_member.php"); ?>

        </div>
        <hr class="hr">
    </section>

    <!-- Realisation -->
    <section id="gallery bg-light">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Nos Realisations</h2>
            </div>

            <?php include_once("realisation.php"); ?>

        </div>
    </section>

    <!-- Localisation -->
    <section id="gallery" class="bg-light">
        <div class="container px-5">
            <div class="row justify-content-center comment-bg">
                <div class="col-lg-6 col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3980.730084217864!2d11.5189444!3d3.8679721999999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zM8KwNTInMDQuNyJOIDExwrAzMScwOC4yIkU!5e0!3m2!1sfr!2scm!4v1711704625324!5m2!1sfr!2scm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 col-md-12 comment-round d-flex flex-column align-items-center">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>