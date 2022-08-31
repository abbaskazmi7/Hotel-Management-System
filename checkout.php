<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <?php include_once "assets/common/allMeta.php" ?>
    <?php include_once "assets/common/allCss.php" ?>
    <link rel="stylesheet" href="assets/lib/css/index.css">
    <title>.:|Checkout|:.</title>
</head>

<body>

    <!-- NavBar -->
    <?php include_once "assets/common/navBar.php"; ?>
    <!-- NavBar -->

    <div class="container-fluid" style="margin-top: 150px;">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <form action="" method="post">
                    <center class="mb-3">
                    <img src="<?php echo $_SESSION["user_image"]; ?>" alt=""><br>
                    <b>Email:</b><b><?php echo $_SESSION["user_email_address"] ?></b>
                    </center>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <b>First name:</b>
                            <input class="form-control" type="text" name="firstName" id=""
                                value="<?php echo $_SESSION["user_first_name"];?>">
                        </div>
                        <div class="col-md-6">
                            <b>Last name</b>
                            <input class="form-control" type="text" name="lastName" id="" value="<?php echo $_SESSION["user_last_name"];?>">
                        </div>
                    </div>
                    <input class="form-control mb-3" type="text" name="contact" id="" placeholder="Contact no...">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <b>Starting date:</b>
                            <input class="form-control" type="text" name="firstName" id=""
                                value="<?php echo $_SESSION["startingDate"];?>">
                        </div>
                        <div class="col-md-6">
                            <b>Ending date:</b>
                            <input class="form-control" type="text" name="lastName" id="" value="<?php echo $_SESSION["endingDate"];?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <b>No of Adult:</b>
                            <input class="form-control" type="text" name="firstName" id=""
                                value="<?php echo $_SESSION["noOfAdult"];?>">
                        </div>
                        <div class="col-md-6">
                            <b>No of Children</b>
                            <input class="form-control" type="text" name="lastName" id="" value="<?php echo $_SESSION["noOfChildren"];?>">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <?php include_once "assets/common/footer.php" ?>
    <?php include_once "assets/common/allJs.php" ?>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 3000,
            },

        });
    </script>

</body>

</html>