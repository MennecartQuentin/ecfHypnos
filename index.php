<!DOCTYPE html>

<html lang="fr">
    <head>

        <!-- META -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hôtel Hypnos | Accueil</title>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          
    
        <!-- STYLES -->
        <!-- CSS -->
        <link href="content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="content/css/home.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" />
       

        <script type="text/javascript" src="content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="content/js/modernizr-3.3.1.min.js"></script>
    </head>

    <body>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include 'view/headerView.php'; ?>

            <!-- Content -->
            <div class="content home">
                <div class="content-overlay">
                    <div class="container container-main">
                        <div class="home-title">
                        
                            <h1 id="home-title-hotel">À L'HÔTEL</h1>
                            <h1 id="home-title-^hypnos">HYPNOS</h1>
                        </div>
                        <table>
                            <tr>
                                <td>
                                    <div class="card">
                                        <h2>Une accueil de qualité</h2>
                                        <p>
                                            Les Hôtels Hypnos propose 12 chambres, dans 7 établissement à la décoration luxueuse et aux équipements haut de gamme.
                                        </p>
                                        <a href="/bedrooms"><button class="button-submit">Voir nos chambres</button></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="card">
                                        <h2>Des services premium</h2>
                                        <p>
                                            Connexion WiFi gratuite et illimitée depuis votre chambre et tous les espaces communs de l'hôtel, service petit-déjeuner en chambre de 6h30 à 12h... Profitez de services premium durant votre séjour.
                                        </p>
                                        <a><button class="button-submit">Voir nos services</button></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="card">
                                        <h2>Des prix attractifs</h2>
                                        <p>
                                            Les Hôtels Hypnos propose des tarifs attractifs, à partir de 150€ la nuit, en plein coeur des villes.
                                        </p>
                                        <a href="/booking/stay"><button class="button-submit">Consulter nos tarifs</button></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include 'view/footerView.php'; ?>
        </div>
        <script type="text/javascript" src="content/js/script.js"></script>
    </body>
</html>
