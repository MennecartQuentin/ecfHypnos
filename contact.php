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
        <link href="content/css/contact.css" rel="stylesheet" type="text/css" media="screen" />
       
        <!-- SCRIPTS -->
        <script type="text/javascript" src="content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="content/js/modernizr-3.3.1.min.js"></script>

    </head>

    <body>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include 'view/headerView.php'; ?>

            <!-- Content -->
            <div class="content contact">
                <div class="content-overlay">

                    <!-- Container -->
                    <div class="container container-main">
                        <table>
                            <tr>
                                <td>
                                    <form action="" method="post" id="contact-form">
                                        <h1>Ecrivez-nous</h1>
                                        <div class="input-container input-container-mail-object"><input type="text" name="contact-email-object" placeholder="Sujet" required /></div>
                                        <textarea form="contact-form" id="contact-message" required></textarea>
                                        <div class="input-container input-container-user"><input type="text" placeholder="Nom" name="contact-name" id="contact-name" required /></div>
                                        <div class="input-container input-container-username"><input type="email" placeholder="Email" name="contact-email" id="contact-email" pattern="[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?" oninput="try {if ($(this).val().match(new RegExp(this.getAttribute('pattern')))) { this.setCustomValidity(''); } else { this.setCustomValidity('Veuillez entrer une adresse valide'); }} catch(e) {}" required /></div><br />
                                        <button class="button-submit" id="contact-submit-message">Envoyer</button>
                                    </form>
                                </td>
                                <td>
                                    <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20563.68153861871!2d3.94732285!3d49.89016305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1649314540053!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

        <script type="text/javascript" src="/content/js/script.js"></script>

    </body>
</html>
