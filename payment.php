<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Payment</title>
</head>

<body>
    <div class="container">
        <div class="row align-items-center align-self-center justify-content-center" style="height: 100vh;">
            <div class="col-md-6">
                <?php session_start(); ?>
                <img src="<?php echo $_SESSION["user_image"]; ?>" alt="">
                <?php echo $_SESSION["user_first_name"]. $_SESSION['user_last_name'];?>
                <li class="list-group-item"><?php echo $_SESSION['user_email_address'];?></li>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Checkin Date:</th>
                            <td><?php echo $_SESSION["checkinDate"];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Checkout Date:</th>
                            <td><?php echo $_SESSION["checkoutDate"];?></td>
                        </tr>
                        <tr>
                            <th scope="row">No of Adults:</th>
                            <td><?php echo $_SESSION["adultNo"];?></td>
                        </tr>
                        <tr>
                            <th scope="row">No of Children:</th>
                            <td><?php echo $_SESSION["childrenNo"];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Type of Room:</th>
                            <td><?php echo $_SESSION["typeOfRoom"];?></td>
                        </tr>
                        <tr>
                            <th scope="row">No of Room:</th>
                            <td><?php echo $_SESSION["noOfRoom"];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Food plan:</th>
                            <td><?php echo $_SESSION["foodPlans"];?></td>
                        </tr>
                        <tr>
                            <th scope="row">CNIC:</th>
                            <td><?php echo $_SESSION["cnic"];?></td>
                        </tr>
                        <tr>
                            <th scope="row">Contact no:</th>
                            <td><?php echo $_SESSION["contactNo"];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <form action="paymentSave.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="row align-items-center align-self-center justify-content-end">
                            <div class="col-md-4 text-center">
                                <img src="assets/images/jazzcash.png" alt="" style="width:150px;height:150px">
                                <h6>+923025037041</h6>
                                <input type="radio" name="paymentMethod" id="" required>Jasscash
                            </div>
                            <div class="col-md-4 text-center">
                            <img src="assets/images/eassypaisa.jpg" alt="" style="width:150px;height:150px">
                            <h6>+923489595596</h6>
                                <input type="radio" name="paymentMethod" id="" required>Eassypaisa
                            </div>
                            <div class="col-md-4 text-center">
                            <img src="assets/images/cash.jpg" alt="" style="width:150px;height:150px"><br>
                                <input type="radio" name="paymentMethod" id="" value="By Hand" required>Cash payment
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" class="form-control form-control-sm mt-3" name="file" id="file">
                            <input type="submit" class="btn btn-success mt-3" name="paymentBtn" value="Send">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>