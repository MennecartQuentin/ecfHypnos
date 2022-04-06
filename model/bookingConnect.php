<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ecf_hypnos');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT `id` FROM `client` WHERE `client_clientlogin` = '$myusername' AND `client_clientpassword` = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        $_SESSION['login_user'] = $myusername;
        header("location: /booking/stay.php");
    } else {
        $error = "Your username or password is invalid";
    }
}
