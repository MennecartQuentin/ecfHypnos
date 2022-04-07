<!DOCTYPE html>

<html lang="fr">
    <head>

        <!-- META -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hôtel Hypnos | Accueil</title>
        
        <!-- STYLES -->
        <!-- CSS -->
        <link href="/content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/content/css/account.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="/content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="/content/js/modernizr-3.3.1.min.js"></script>
    </head>

    <body>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include '../view/headerView.php'; ?>

            <!-- Content -->
            <div class="content home">
                <div class="content-overlay">
                    <div class="container container-main tabs">
                        <ul class="tab-links">
                            <li class="active"><a href="#tab1">Profil</a></li>
                            <li><a href="#tab2">Modifier</a></li>
                            <li><a href="#tab3">Sécurité</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab1" class="tab active">
                                <figure class="user-avatar-container">
                                    <?php echo user_avatar($row['id'], $row['client_gender']) ?>
                                    <figcaption><?php echo $row['client_firstname']." ".$row['client_lastname']; ?></figcaption>
                                </figure>
                                <div class="tab-container">
                                    <table>
                                        <tr>
                                            <td class="user-info-section">Email</td>
                                            <td><?php echo '<a href="mailto:'.$row['client_mail'].'" target="_blank">'.$row['client_mail'].'</a>' ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <a class="button-social button-social-facebook" href="https://www.facebook.com/" target="_blank">
                                                    <img src="/content/img/icons/facebook-letter-logo_24px_white.png" alt="login-with-facebook" />
                                                    <p>Connecté avec Facebook</p>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div id="tab2" class="tab">
                                <div class="tab-container">
                                    <form action="/model/accountModel.php" method="post">
                                        <table>
                                            <tr>
                                                <td class="user-info-section">Avatar</td>
                                                <td colspan="2">
                                                    <div class="user-avatar-container">
                                                        <?php echo user_avatar($row['id'], $row['client_gender']) ?>
                                                        <input type="file" name="nom" />
                                                    </div>
                                                    <br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="user-info-section">Email</td>
                                                <td colspan="2">
                                                    <?php echo '<input type="email" id="user-email" name="user_email" value="'.$row['client_mail'].'" placeholder="xyz@example.com" />'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <div class="button-social button-social-facebook" onclick="fb_logout();">
                                                        <img src="/content/img/icons/facebook-letter-logo_24px_white.png" alt="login-with-facebook" />
                                                        <p>Se déconnecter de Facebook</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><button class="button-submit" name="edit_user">Mettre à jour</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>

                            <div id="tab3" class="tab">
                                <div class="tab-container">
                                    <h1>Changer le mot de passe</h1>
                                    <form action="../model/accountModel.php" method="post">
                                        <table>
                                            <tr>
                                                <td><label for="user-password-old">Ancien mot de passe</label></td>
                                                <td><input type="password" id="user-password-old" name="user_password_old" /></td>
                                            </tr>
                                            <tr>
                                                <td><label for="user-password-new">Nouveau mot de passe</label></td>
                                                <td><input type="password" id="user-password-new" name="user_password_new" /></td>
                                            </tr>
                                            <tr>
                                                <td><label for="user-password-new2">Confirmer nouveau mot de passe</label></td>
                                                <td><input type="password" id="user-password-new2" name="user_password_new2" /></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><button class="button-submit" name="change_password">Changer le mot de passe</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include '../view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="/content/js/script.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.tabs .tab-links a').on('click', function(e)  {
                    var currentAttrValue = jQuery(this).attr('href');

                    // Show/Hide Tabs
                    jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

                    // Change/remove current tab to active
                    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

                    e.preventDefault();
                });
            });
        </script>

    </body>
</html>
