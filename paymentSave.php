<?php
echo "Save new user";
if (isset($_POST["paymentBtn"])) {
    // Get the submitted form data 
    echo $paymentMethod = $_POST['paymentMethod'];
    $uploadStatus = 1;
    $uploadDir = "admin/assets/images/uploads/";
    // Upload file 
    $uploadedFile = '';
    if (!empty($_FILES["file"]["name"])) {
        // File path config 
        echo $fileName = $_FILES["file"]["name"];
        $targetFilePath = $uploadDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        // Rename file
        $rand = rand(0, 9999999999);
        $newFileName = $rand . '.' . $fileType;
        $targetFilePath = $uploadDir . $newFileName;
        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to the server 
            $uploadedFile = $newFileName;
            // Include the database config file 
            include_once 'admin/connection.php';
            session_start();
            $cnic=$_SESSION["cnic"];
            // Insert form data in the database
            $sql = "UPDATE `booking` SET `paymentMethod`='$paymentMethod',`paymentSlip`='$uploadedFile' WHERE cnic='$cnic'";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
                move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
                header('location:thankYouAfterPayment.html');
                



                
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Sorry, only JPG, JPEG, & PNG files are allowed to upload.";
        }
    } else {
        echo $paymentMethod = $_POST['paymentMethod'];
        session_start();
            $cnic=$_SESSION["cnic"];
        include_once 'admin/connection.php';
        // Insert form data in the database
        $sql = "UPDATE `booking` SET `paymentMethod`='$paymentMethod' WHERE cnic='$cnic'";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header('location:thankYouAfterPayment.html');
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
