<!doctype html>
<html lang="en">

<head>
    <?php include_once "assets/common/allMeta.php" ?>
    <?php include_once "assets/common/allCss.php" ?>
    <link rel="stylesheet" href="assets/lib/css/index.css">
    <title>.:|Food|:.</title>
</head>

<body>

    <!-- NavBar -->
    <?php include_once "assets/common/navBar.php"; ?>
    <!-- NavBar -->

    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Click chat box to order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        We are always here to have your order
      </div>
    </div>
  </div>
</div>
<!-- Model -->



    <div class="container-fluid">
        <div class="row align-items-center" style="height: 100vh;background: url(assets/images/food.jpg);
  background-position: center;background-size: cover;background-attachment: fixed;background-repeat: no-repeat;">
            <div class="col-md-6"></div>
            <div class="col-md-6 text-center">
                <h1 class="text-white">Welcome to our Restaurant</h1>
                <h6 class="text-white">Delivering great food for more than 18 years!</h6>
                <!-- Menu -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-lg btn-success" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Menu
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background:#0B6354">
                            <div class="modal-header">
                                <h5 class="modal-title text-white" id="exampleModalLabel">Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center" style="height:100vh;">
            <div class="col-md-6">
                <h3 class="mainHeading">Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
                <ul>
                    <li> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="col-md-6">
                <img src="assets/images/food1.jpg" alt="" class="shadow-lg rounded"
                    style="position:relative;width:100%;height:50vh;">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Why Choose Our Restaurant</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>01</h3>
                <h6>Lorem, ipsum.</h6>
                <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
            <div class="col-md-4">
                <h3>01</h3>
                <h6>Lorem, ipsum.</h6>
                <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
            <div class="col-md-4">
                <h3>01</h3>
                <h6>Lorem, ipsum.</h6>
                <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
        </div>
    </div>


    <div class="container-fluid mb-3" style="margin-top:50px;">
        <div class="row">
            <div class="co-md-12">
                <h1 class="mainHeading text-center">Check Our Tasty Menu</h1>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
            include_once "admin/connection.php";
            $sql = "SELECT * FROM food";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $file="admin/assets/images/uploads/".$row["foodImage"];
            ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo $file; ?>" class="card-img-top" alt="..." style="height:20vh;width:150px">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $row["foodName"];?></h6>
                        <b class="card-title">Rs\.<?php echo $row["foodPrice"];?></b>
                    </div>
                    <div class="card-footer">
                        <b>Category:</b><small class="text-muted"><?php echo $row["foodSize"]; ?></small>
                        <small class="text-muted float-end"><?php echo $row["date"]; ?></small>
                        <br>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm mb-2 btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Order row 
                        </button>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
    </div>







    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6166b0ec72ad790a523001ce/1fhsi683i';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
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