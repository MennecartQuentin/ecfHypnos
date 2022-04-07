<!DOCTYPE html>

<html lang="fr">
    <head>

        <!-- META -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hôtel Hypnos | Nos chambres</title>

        <!-- STYLES -->
        <!-- CSS -->
        <link href="content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="content/css/bedrooms.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- SCRIPTS -->
        <!-- Libraries -->
        <script type="text/javascript" src="content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="content/js/modernizr-3.3.1.min.js"></script>
    </head>
    <body>

        <!-- Wrapper -->
        <div class="wrapper">
            <?php include 'view/headerView.php'; ?>

            <!-- Content -->
            <div class="content bedrooms">

                <!-- Section 'Introduction' -->
                <div id="bedrooms">
                    <div class="container">
                        <div class="bedrooms-content-card">
                            <img src="/content/img/icons/list_24px_fb9e08.png" alt="list" />
                            <h3>Un choix élargi</h3>
                            <p>
                                L'hôtel Hypnos offre toute une gamme de chambres luxueuse, simples, doubles, twin, avec ou sans salle de bains.
                            </p>
                            <a href="/content/img/bedrooms"><button>Voir les chambres</button></a>
                        </div>
                        <div class="bedrooms-content-card">
                            <img src="/content/img/icons/label_24px_green.png" alt="label" />
                            <h3>Des tarifs attractifs</h3>
                            <p>
                                Attractifs, nos tarifs commencent à partir de 100€ la nuit, en plein coeur des plus belles villes de France!
                            </p>
                            <a href="/bedrooms#pricing"><button>Consulter nos tarifs</button></a>
                        </div>
                        <div class="bedrooms-content-card">
                            <img src="/content/img/icons/circle-with-check-symbol_24px_blue.png" alt="check" />
                            <h3>Confort et sécurité</h3>
                            <p>
                                Toutes les chambres de l’hôtel sont nettoyées quotidiennement et toutes possèdent un accès sécurisé avec une carte.
                            </p>
                            <a href="/bedrooms.php"><button>En savoir plus</button></a>
                        </div>
                    </div>
                </div>

                <!-- Section 'Overview/Gallery' -->
                <div id="gallery">
                    <div class="container">
                        <div class="bedrooms-content-gallery left">
                            <div class="hover-effect">
                                <img class="img-responsive" src="/content/img/illustrations/single-room.png" alt="" />
                                <div class="overlay">
                                    <h2>Chambre simple</h2>
                                    <a class="info" href="/">Réserver</a>
                                </div>
                            </div>
                        </div>
                        <div class="bedrooms-content-gallery middle">
                            <div class="hover-effect">
                                <img class="img-responsive" src="/content/img/illustrations/double-room.png" alt="" />
                                <div class="overlay">
                                    <h2>Chambre double</h2>
                                    <a class="info" href="/">Réserver</a>
                                </div>
                            </div>
                        </div>
                        <div class="bedrooms-content-gallery right">
                            <div class="hover-effect">
                                <img class="img-responsive" src="/content/img/illustrations/twin-room.jpg" alt="" />
                                <div class="overlay">
                                    <h2>Chambre twin</h2>
                                    <a class="info" href="/">Réserver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include 'view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="content/js/script.js"></script>
    </body>
</html>
