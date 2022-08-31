<?php
if (isset($_POST["bookingBtn"])) {
    session_start();
    $_SESSION["checkinDate"] = $_POST["checkinDate"];
    $_SESSION["checkoutDate"] = $_POST["checkoutDate"];
    $_SESSION["adultNo"] = $_POST["adultNo"];
    $_SESSION["childrenNo"] = $_POST["childrenNo"];
    $_SESSION["typeOfRoom"] = $_POST["typeOfRoom"];
    $_SESSION["cnic"] = $_POST["cnic"];
    $_SESSION["contactNo"] = $_POST["contactNo"];
    $_SESSION["noOfRoom"] = $_POST["noOfRoom"];
    $_SESSION["foodPlans"] = $_POST["foodPlans"];
    header('location:google.php');
}
