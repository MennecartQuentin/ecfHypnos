<?php

require_once '../model/bookingModel.php';
require_once '../view/bookingStayView.php';

$loginUser = $_SESSION["login_user"];

if (isset($_POST['bathroom'])) {
    $bathroom = 1;
} else {
    $bathroom = 0;
}

if (isset($_POST['board'])){
    $board = 1;
} else {
    $board=0;
}

$arrivalDate =(isset($_POST['arrivalDate']) ? $_POST['arrivalDate'] : '');


$departureDate = (isset($_POST['departureDate']) ? $_POST['departureDate'] : '');
$idBooking = generateRandId();
$idClient = "SELECT `client_idclient` FROM `client` WHERE `client_clientlogin` = '$loginUser'";
$nbPersons = (isset($_POST['number']) ? $_POST['number'] : "" );
$idRoom = checkRoomAvailable($bathroom, $nbPersons, $arrivalDate, $departureDate);
$nbNights = calculateNbNights($arrivalDate, $departureDate);
$price = calculatePrice($nbNights, $arrivalDate, $idRoom,$board);
$canceled = 0;
if (isset($_POST['number'])){$nbPersons = $_POST['number'];}
$purpose = (isset($_POST['purpose']) ? $_POST['purpose'] : '');
$_SESSION["idBooking"]=$idBooking;
$newBooking = "INSERT INTO `booking` (`booking_idbooking`, `booking_idroom`, `booking_idclient`, `booking_datestart`, `booking_dateend`, `booking_nbnights`, `booking_price`, `booking_canceled`, `booking_nbpersons`, `booking_purpose`) VALUES ('$idBooking', '$idRoom', '$idClient', '$arrivalDate', '$departureDate', '$nbNights', '$price', '$canceled', '$nbPersons', '$purpose'";