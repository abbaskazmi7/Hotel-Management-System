<?php
session_start();
echo $profileImage= $_SESSION["user_image"];
echo $fullName=$_SESSION["user_first_name"]. $_SESSION['user_last_name'];echo "<br>";
echo $checkinDate=$_SESSION["checkinDate"];echo "<br>";
echo $checkoutDate=$_SESSION["checkoutDate"];echo "<br>";
echo $adultNo=$_SESSION["adultNo"];echo "<br>";
echo $childrenNo=$_SESSION["childrenNo"];echo "<br>";
echo $typeOfRoom=$_SESSION["typeOfRoom"];echo "<br>";
echo $mail= $_SESSION["user_email_address"];echo "<br>";
echo $cnic=$_SESSION["cnic"];echo "<br>";
echo $contactNo=$_SESSION["contactNo"];echo "<br>";
echo $noOfRoom=$_SESSION["noOfRoom"];echo "<br>";
echo $foodPlans=$_SESSION["foodPlans"];echo "<br>";
include_once "admin/connection.php";
$sql = "INSERT INTO `booking`(`profileImage`, `fullName`, `mail`, `contactNo`, `cnic`, `checkin`, `checkout`, `adultNo`, `childrenNo`, `roomType`, `noOfRoom`, `FoodPlan`) 
VALUES ('$profileImage','$fullName','$mail','$contactNo','$cnic','$checkinDate','$checkoutDate','$adultNo','$childrenNo','$typeOfRoom','$noOfRoom','$foodPlans')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:payment.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>