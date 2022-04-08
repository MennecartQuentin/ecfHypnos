<!DOCTYPE html>

<html lang="fr">
    <head>

        <!-- META -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hôtel Hypnos | Contactez-nous</title>
       
        <!-- STYLES -->
        <!-- CSS -->
        <link href="content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        
        <script type="text/javascript" src="content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="content/js/modernizr-3.3.1.min.js"></script>
    </head>

    <body>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include 'view/headerView.php'; ?>

            <!-- Content -->
            <div class="content sitemap">
                <div class="content-overlay">

                    <!-- Container -->
                    <div class="container container-main">
                        <h1>Plan du site</h1>

                        <ul>
                            <li><a href="/index.php">Accueil</a></li>
                            <li><a href="/hotel.php">L'hôtel</a></li>
                            <li>
                                <a href="/bedrooms.php">Nos chambres</a>
                                <ul>
                                    <li><a href="/bedrooms#single-room">Chambre simple</a></li>
                                    <li><a href="/bedrooms#double-room">Chambre double</a></li>
                                    <li><a href="/bedrooms#twin-room">Chambre twin</a></li>
                                </ul>
                            </li>
                            <li><a href="/booking/stay.php">Réservations</a></li>
                            <li><a href="/about.php">À propos</a></li>
                            <li><a href="/contact.php">Contact</a></li>
                            <li><a href="/login.php">Connexion</a></li>
                        </ul>

                    </div>

                </div>
            </div>

            <!-- Footer -->
            <?php include 'view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="/content/js/script.js"></script>
        <script type="text/javascript" src="/content/js/datePicker.js"></script>

    </body>
</html>
