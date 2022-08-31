<?php
	include 'admin/connection.php';
	$name=$_POST['fullName'];
	$email=$_POST['mail'];
	$phone=$_POST['contactNo'];
	$message=$_POST['message'];
	$sql = "INSERT INTO usermails (fullName, contactNo, mail, userMessage, messageStatus, replyStatus) 
	VALUES ('$name','$phone','$email','$message', '0','0')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>