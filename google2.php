<?php
//index.php
//Include Configuration File
include('config.php');
$login_button = '';
if (isset($_GET["code"])) {
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
    if (!isset($token['error'])) {
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];
        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();
        if (!empty($data['given_name'])) {
            $_SESSION['user_first_name'] = $data['given_name'];
        }
        if (!empty($data['family_name'])) {
            $_SESSION['user_last_name'] = $data['family_name'];
        }
        if (!empty($data['email'])) {
            $_SESSION['user_email_address'] = $data['email'];
        }
        if (!empty($data['gender'])) {
            $_SESSION['user_gender'] = $data['gender'];
        }
        if (!empty($data['picture'])) {
            $_SESSION['user_image'] = $data['picture'];
        }
    }
}
if (!isset($_SESSION['access_token'])) {
    $login_button = '<a href="' . $google_client->createAuthUrl() . '" class="btn btn-danger"><b class="fa fa-google"></b> Login With Google</a>';
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Signin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row align-items-center align-self-center justify-content-center" style="height: 100vh;">
            <div class="col-md-4">
                <?php
                if ($login_button == '') {
                    ?>
                <h1>Thank you</h1>
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
                            <th scope="row">No of Adult:</th>
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
                <?php
                } else {
                    ?>

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
                            <th scope="row">No of Adult:</th>
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
                <?php
                   
                }
                ?>
            </div>
            <div class="col-md-4">
                <?php
                if ($login_button == '') {
                    ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>WELCOME</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="<?php echo $_SESSION["user_image"]; ?>" alt="">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <?php echo $_SESSION["user_first_name"]. $_SESSION['user_last_name'];?>
                                </li>
                                <li class="list-group-item"><?php echo $_SESSION['user_email_address'];?></li>
                            </ul>
                            <a href="logout.php" class="btn btn-sm btn-danger">LOGOUT</a>
                            <a href="history.php" class="btn btn-sm btn-success">CHECKIN</a>
                        </div>
                    </div>
                </div>                
            </div>
            <?php
                } else {
                    ?>
            <h1>Sign in please...</h1>
            <form action="" method="post">
                <input type="text" class="form-control" name="mail" placeholder="Email...">
                <input type="password" class="form-control" name="mail" placeholder="Email...">
                <input type="submit" class="btn btn-sm btn-success" value="Sigin">
                <?php echo $login_button; ?>
            </form>
            <?php
                   
                }
                ?>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>