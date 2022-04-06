<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ecf_hypnos');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start();

$id = $_SESSION['login_user'];
$sql = "SELECT * FROM `client` WHERE `client_clientlogin` = '$id'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if (isset($_POST['edit_user']))
{
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // username and password sent from form

        $email = mysqli_real_escape_string($db,$_POST['client_mail']);
        $firstname = mysqli_real_escape_string($db,$_POST['client_firstname']);
        $lastname = mysqli_real_escape_string($db,$_POST['client_lastname']);
        $password = mysqli_real_escape_string($db,$_POST['client_clientpassword']);

        

        $sql = "UPDATE `client` SET `client_mail` = '$email', `client_firstname` = '$firstname', `client_lastname` = '$lastname', `client_clientpassword` = '$password',  WHERE `client_clientlogin` = '$id'";

        if (mysqli_query($db,$sql)) {
            header("location: /account/profile.php");
        } else {
            echo "Error updating record.";
        }
    }
}

if (isset($_POST['change_password'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $old_password = mysqli_real_escape_string($db,$_POST['user_password_old']);
        $new_password = mysqli_real_escape_string($db,$_POST['user_password_new']);
        $new_password2 = mysqli_real_escape_string($db,$_POST['user_password_new2']);

        $old_password_test = "SELECT `client_clientlogin` FROM `client` WHERE `client_clientpassword` = '$old_password'";
        $test_result = mysqli_query($db,$old_password_test);
        $test_result_row = mysqli_fetch_array($test_result,MYSQLI_ASSOC);

        if ($test_result_row['client_clientlogin'] == $id
            and $new_password == $new_password2) {

            $sql = "UPDATE `client` SET `client_clientpassword` = '$new_password' WHERE `client_clientlogin` = '$id'";

            if (mysqli_query($db,$sql)) {
                header("location: /account/profile.php");
            } else {
                echo "Error updating record.";
            }
        } 
}
}