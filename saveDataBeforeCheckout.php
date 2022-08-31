<?php
include_once 'admin/connection.php';
session_start();
$mail =  $_SESSION["user_email_address"];

$sql = "SELECT * FROM users WHERE mail = '$mail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
  // output data of each row
  $row = $result->fetch_assoc();
  $_SESSION["log"]= $mail;
  header('location: checkout.php');
 
} else 
{
    echo "Ready to save.";
    $fullName= $_SESSION["user_first_name"]." ".$_SESSION["user_last_name"];
    $image= $_SESSION["user_image"];
    $mail= $_SESSION["user_email_address"];
    $dataInsertSql = "INSERT INTO customer (CustomerName, CustomerImage, mail)
    VALUES ('$fullName', '$image', '$mail')";
    if ($conn->query($dataInsertSql) === TRUE) {
        $_SESSION["log"]= $_SESSION["user_email_address"];
        header('location: checkout.php');
      } else {
          echo "Error: " . $dataInsertSql . "<br>" . $conn->error;
      }
}
?>